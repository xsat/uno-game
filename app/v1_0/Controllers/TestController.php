<?php

namespace App\v1_0\Controllers;

use Common\Game\Action\DistributionAction;
use Common\Game\Action\StartAction;
use Common\Game\Card\Card;
use Common\Game\Card\CardCollection;
use Common\Game\DeckFactory;
use Common\Game\Color\RedColor;
use Common\Game\Effect\NullEffect;
use Common\Game\Game;
use Common\Game\Id\Id;
use Common\Game\Player\Player;
use Common\Game\Player\PlayerCollection;
use Common\Game\Rank\NumericRank;

//use Messenger\Api\Api;
//use Messenger\Api\Message\Text;
//use Messenger\Api\Recipient\Id;

/**
 * Class TestController
 */
class TestController extends BaseController
{
    public function testAction()
    {
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

        var_dump($game);
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
