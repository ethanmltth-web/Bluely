<?php
/**
 * Local-only secrets — never commit (see .gitignore).
 * For Ollama Cloud: paste your key in ollama.local.php (see ollama.local.sample.php)
 * or use the API key field in the AI tab settings (stored in this browser only).
 */
return [
    'client_id'       => 'YOUR_GOOGLE_CLIENT_ID',
    'client_secret'   => 'YOUR_GOOGLE_CLIENT_SECRET',
    'ollama_api_key'  => '2f162ee549894d428bb2db6235cbc7d3.12K-g46R4XIsCgEkL3Ld87pK',
    'ollama_base_url' => 'https://ollama.com',
    'ollama_model'    => 'gpt-oss:120b',
];
