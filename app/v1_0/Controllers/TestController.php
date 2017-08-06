<?php

namespace App\v1_0\Controllers;

use Common\Game\Action\CheckAction;
use Common\Game\Action\DistributionAction;
use Common\Game\Action\FirstAction;
use Common\Game\Action\StartAction;
use Common\Game\Action\TurnAction;
use Common\Game\Card\CardCollection;
use Common\Game\DeckFactory;
use Common\Game\Game;
use Common\Game\GameException;
use Common\Game\Id\Id;
use Common\Game\Player\Player;
use Common\Game\Player\PlayerCollection;

/**
 * Class TestController
 */
class TestController extends BaseController
{
    public function testAction()
    {
        try {

            srand(1);

            $players = new PlayerCollection();
            $id = 1;
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $players->push(new Player(new Id($id++), new CardCollection()));
            $game = new Game($players, (new DeckFactory($players))->create());

            $game->act(new StartAction());
            $game->act(new DistributionAction());
            $game->act(new FirstAction());
            $game->act(new TurnAction($game->getActivePlayer()->getId(), new Id(52)));
            $game->act(new CheckAction());

//        $game->act(new TurnAction());

            var_dump($game);
        } catch (GameException $exception) {
            echo($exception->getMessage() . "\r\n" . $exception->getTraceAsString());
        }
        exit;

//        $api = new Api(getenv('ACCESS_TOKEN'));
//
//        $this->response->setJsonContent(
//            $api->send(
//                new Id(getenv('BOT_ID')),
//                new Text('Hello world')
//            )
//        );
    }
}
