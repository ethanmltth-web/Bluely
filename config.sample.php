<?php
/**
 * Copy to config.php and add credentials only if you restore server-side Google sign-in.
 * Get values from: https://console.cloud.google.com/ → APIs & Services → Credentials
 * Never commit config.php.
 */
return [
    'client_id'     => 'YOUR_GOOGLE_CLIENT_ID',
    'client_secret' => 'YOUR_GOOGLE_CLIENT_SECRET',
];
