<?php
/**
 * Chat proxy for Bluely AI assistant (Ollama local or Ollama Cloud).
 * Copy config.sample.php to config.php and set ollama_api_key / ollama_model.
 */
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$configPath = dirname(__DIR__) . '/config.php';
$config = file_exists($configPath) ? require $configPath : [];

$localConfigPath = dirname(__DIR__) . '/ollama.local.php';
if (file_exists($localConfigPath)) {
    $localConfig = require $localConfigPath;
    if (is_array($localConfig)) {
        $config = array_merge($config, $localConfig);
    }
}

$raw = file_get_contents('php://input');
$body = json_decode($raw ?: '{}', true);
if (!is_array($body)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON body']);
    exit;
}

$apiKey = !empty($body['apiKey']) ? trim((string) $body['apiKey']) : '';
if ($apiKey === '' && isset($config['ollama_api_key'])) {
    $apiKey = trim((string) $config['ollama_api_key']);
}

$baseUrl = isset($config['ollama_base_url']) ? rtrim(trim((string) $config['ollama_base_url']), '/') : '';
if ($baseUrl === '') {
    $baseUrl = $apiKey !== '' ? 'https://ollama.com' : 'http://127.0.0.1:11434';
}

$isCloud = strpos($baseUrl, 'ollama.com') !== false;
if ($isCloud && $apiKey === '') {
    http_response_code(503);
    echo json_encode([
        'error' => 'No Ollama API key. Add it in AI settings (gear icon), or copy ollama.local.sample.php to ollama.local.php and paste your key.',
        'code' => 'missing_key',
    ]);
    exit;
}

$messages = isset($body['messages']) && is_array($body['messages']) ? $body['messages'] : [];
$ollamaMessages = [];

foreach ($messages as $msg) {
    if (!is_array($msg)) {
        continue;
    }
    $role = isset($msg['role']) ? (string) $msg['role'] : '';
    $content = isset($msg['content']) ? trim((string) $msg['content']) : '';
    if ($content === '') {
        continue;
    }
    if ($role !== 'system' && $role !== 'user' && $role !== 'assistant') {
        continue;
    }
    $ollamaMessages[] = ['role' => $role, 'content' => $content];
}

if (!$ollamaMessages) {
    http_response_code(400);
    echo json_encode(['error' => 'No messages provided']);
    exit;
}

$model = isset($config['ollama_model']) ? trim((string) $config['ollama_model']) : '';
if ($model === '') {
    $model = $apiKey !== '' ? 'gpt-oss:120b' : 'llama3.2';
}

$payload = json_encode([
    'model' => $model,
    'messages' => $ollamaMessages,
    'stream' => false,
]);

$url = $baseUrl . '/api/chat';
$headers = ['Content-Type: application/json'];
if ($apiKey !== '') {
    $headers[] = 'Authorization: Bearer ' . $apiKey;
}

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 120,
]);

$response = curl_exec($ch);
$httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($response === false) {
    http_response_code(502);
    echo json_encode(['error' => 'Could not reach Ollama: ' . $curlError]);
    exit;
}

$data = json_decode($response, true);
if ($httpCode < 200 || $httpCode >= 300) {
    $errMsg = 'Ollama API error';
    if (is_array($data) && isset($data['error'])) {
        $errMsg = is_string($data['error']) ? $data['error'] : json_encode($data['error']);
    }
    http_response_code($httpCode >= 400 ? $httpCode : 502);
    echo json_encode(['error' => $errMsg]);
    exit;
}

$reply = '';
if (is_array($data) && !empty($data['message']['content'])) {
    $reply = trim((string) $data['message']['content']);
}

if ($reply === '') {
    http_response_code(502);
    echo json_encode(['error' => 'Empty response from Ollama']);
    exit;
}

echo json_encode(['reply' => $reply, 'model' => $model]);
