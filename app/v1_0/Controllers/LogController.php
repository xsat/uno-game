<?php

namespace App\v1_0\Controllers;

use Common\Logger;

/**
 * Class LogController
 */
class LogController extends BaseController
{
    /**
     * @param string $type
     */
    public function loadAction(string $type): void
    {
        $this->response->setContent((new Logger(DATA_DIR))->get($type . '.txt'));
    }

    /**
     * @param string $type
     */
    public function clearAction(string $type): void
    {
        (new Logger(DATA_DIR))->get($type . '.txt');
    }
}
