<?php

use App\v1_0\Controllers\IndexController;
use App\v1_0\Controllers\MemberController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Groups;
use Nen\Router\Route;

return new Groups('api/1.0', [
    new Group(null, [
        new Route(IndexController::class, 'welcome', 'welcome', Request::METHOD_GET),
    ]),
]);
