<?php

use Nen\Application;

define('PUBLIC_DIR', __DIR__);

/**
 * Create the application
 *
 * @var Application $app
 */
$app = require __DIR__ . '/../bootstrap/app.php';

$file = PUBLIC_DIR . '/log.txt';
file_put_contents($file, file_get_contents('php://input'));

/**
 * Run the application
 */
$app->run();
