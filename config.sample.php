<?php
/**
 * Copy to config.php. For Ollama Cloud keys, prefer ollama.local.php (see ollama.local.sample.php)
 * or the API key field in the AI tab. Never commit config.php or ollama.local.php.
 */
return [
    'client_id'       => 'YOUR_GOOGLE_CLIENT_ID',
    'client_secret'   => 'YOUR_GOOGLE_CLIENT_SECRET',
    'ollama_api_key'  => '',
    'ollama_base_url' => 'https://ollama.com',
    'ollama_model'    => 'gpt-oss:120b',
];
