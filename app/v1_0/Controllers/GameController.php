<?php

namespace App\v1_0\Controllers;

use Common\Action\NullAction;
use Common\App;
use Common\Game\Game;
use Common\Loader\Action\ActionWrapper;
use Common\Loader\Game\GameWrapper;
use Common\Logger;
use Messenger\Api\Api;

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
        $logger = new Logger(DATA_DIR);

        ob_start();
        echo date('Y-m-d H:i:s'), "\r\n";
        var_dump($_GET);
        $logger->add('get.txt', ob_get_clean());
        ob_start();
        echo date('Y-m-d H:i:s'), "\r\n";
        var_dump($_POST);
        $logger->add('post.txt', ob_get_clean());
        ob_start();
        echo date('Y-m-d H:i:s'), "\r\n";
        echo file_get_contents('php://input');
        $logger->add('put.txt', ob_get_clean());

        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        }

        (new App(
            new ActionWrapper(
                new NullAction()
            ),
            new GameWrapper(
                new Game(
                    new Api(getenv('ACCESS_TOKEN'))
                )
            )
        ))->run();
    }
}
