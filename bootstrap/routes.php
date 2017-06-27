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
    new Group('member', [
        new Route(MemberController::class, 'view', '([0-9]+)', Request::METHOD_GET),
        new Route(MemberController::class, 'create', null, Request::METHOD_POST),
        new Route(MemberController::class, 'update/([0-9]+)', null, Request::METHOD_PUT),
        new Route(MemberController::class, 'delete/([0-9]+)', null, Request::METHOD_DELETE),
    ]),
]);
