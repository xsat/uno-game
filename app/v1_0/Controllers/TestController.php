<?php

namespace App\v1_0\Controllers;

use Common\Game\Card\Card;
use Common\Game\DeckFactory;
use Common\Game\Color\RedColor;
use Common\Game\Effect\NullEffect;
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
        $deckFactory = new DeckFactory([]);

        var_dump($deckFactory->create());
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
