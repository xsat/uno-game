<?php

namespace App\v1_0\Controllers;

/**
 * Class IndexController
 */
class IndexController extends BaseController
{
    /**
     * Test content response
     */
    public function mainAction()
    {
        $this->response->setContent('Welcome gamer...');
    }
}
