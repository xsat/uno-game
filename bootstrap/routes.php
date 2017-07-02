<?php

use App\v1_0\Controllers\IndexController;
use App\v1_0\Controllers\GameController;
use App\v1_0\Controllers\TestController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Groups;
use Nen\Router\Route;

return new Groups(null, [
    new Group(null, [
        new Route(IndexController::class, 'main', null, Request::METHOD_GET),
        new Route(TestController::class, 'test', 'test', Request::METHOD_GET),
        new Route(TestController::class, 'log', 'log', Request::METHOD_GET),
    ]),
    new Group('api/1.0', [
        new Route(GameController::class, 'callback', 'callback', Request::METHOD_GET),
    ]),
]);
