<?php

namespace App\v1_0\Controllers;

/**
 * Class GameController
 */
class GameController extends BaseController
{
    /**
     * Verify token
     */
    public function verifyAction()
    {
    }

    /**
     * Check callback
     */
    public function callbackAction()
    {
        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKE')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        }
    }
}
