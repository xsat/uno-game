<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

define('MAIN_DIR', __DIR__ . '/../');
define('DATA_DIR', MAIN_DIR . 'data/');

if (is_file(MAIN_DIR . '.env')) {
    (new Dotenv(MAIN_DIR))->load();
}

return require __DIR__ . '/app.php';
