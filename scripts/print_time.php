<?php
require __DIR__ . '/../vendor/autoload.php';

// Load the app config to get the configured timezone
$config = require __DIR__ . '/../config/app.php';
$tz = $config['timezone'] ?? 'UTC';

// Use Carbon to print a friendly localized timestamp
$dt = \Carbon\Carbon::now($tz);
echo $dt->format('l · F j, Y · g:i A T') . PHP_EOL;

