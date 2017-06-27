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
    public function welcomeAction()
    {
        $this->response->setContent('Welcome traveler...');
    }
}
