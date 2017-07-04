<?php

namespace App\v1_0\Controllers;

use Messenger\Api\Api;
use Messenger\Api\Message\Text;
use Messenger\Api\Recipient\Id;

/**
 * Class TestController
 */
class TestController extends BaseController
{
    public function testAction()
    {
        $api = new Api(getenv('ACCESS_TOKEN'));

        $this->response->setJsonContent(
            $api->send(
                new Id(getenv('BOT_ID')),
                new Text('Hello world')
            )
        );
    }
}
