<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dir = __DIR__ . '/../';

if (is_file($dir . '.env')) {
    (new Dotenv($dir))->load();
}

return require __DIR__ . '/app.php';
