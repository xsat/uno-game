<?php

use Nen\Application;

define('PUBLIC_DIR', __DIR__);

/**
 * Create the application
 *
 * @var Application $app
 */
$app = require __DIR__ . '/../bootstrap/app.php';

/**
 * Run the application
 */
$app->run();
