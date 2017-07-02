<?php

namespace App\v1_0\Controllers;

/**
 * Class GameController
 */
class GameController extends BaseController
{
    /**
     * Check callback
     */
    public function callbackAction()
    {
        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        }

        $file = __DIR__ . '/../../../public/log.txt';
        ob_start();
        $raw = file_get_contents('php://input');
        var_dump(json_decode($raw, true));
        file_put_contents($file, ob_get_clean());
    }
}
