<?php

use App\v1_0\Controllers\GameController;
use App\v1_0\Controllers\IndexController;
use App\v1_0\Controllers\LogController;
use App\v1_0\Controllers\TestController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Route;
use Nen\Router\Routes;

return new Routes([
    new Routes([
        new Route(IndexController::class, 'main', null, Request::METHOD_GET),
        new Route(TestController::class, 'test', 'test', Request::METHOD_GET),
    ]),
    new Group('log', new Routes([
        new Route(LogController::class, 'load', '(get|post|put)', Request::METHOD_GET),
        new Route(LogController::class, 'clear', '(get|post|put)', Request::METHOD_DELETE),
    ])),
    new Group('api/1.0', new Routes([
        new Route(GameController::class, 'callback', 'callback', Request::METHOD_GET),
        new Route(GameController::class, 'callback', 'callback', Request::METHOD_PUT),
        new Route(GameController::class, 'callback', 'callback', Request::METHOD_POST),
        new Route(GameController::class, 'callback', 'callback', Request::METHOD_DELETE),
    ])),
]);
