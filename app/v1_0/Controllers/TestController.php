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
        $api = new Api(getenv('TOKEN'));

        $this->response->setJsonContent(
            $api->send(
                new Id(getenv('ID')),
                new Text('Hello world')
            )
        );
    }

    public function logAction()
    {
        $file = PUBLIC_DIR . '/log.txt';
        file_put_contents($file, 'hi');
        $file = PUBLIC_DIR . '/log.txt';
        $this->response->setContent(file_get_contents($file));
    }
}
