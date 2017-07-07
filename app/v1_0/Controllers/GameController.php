<?php

namespace App\v1_0\Controllers;

use Common\Action\Action;
use Common\App;
use Common\Game\Game;
use Common\Loader\Action\ActionWrapper;
use Common\Loader\Game\GameWrapper;
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
        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        }

        (new App(
            new ActionWrapper(
                new Action()
            ),
            new GameWrapper(
                new Game(
                    new Api(getenv('ACCESS_TOKEN'))
                )
            )
        ))->run();
    }
}
