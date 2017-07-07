<?php

namespace Common\Game;

use Messenger\Api\ApiInterface;

/**
 * Interface GameInterface
 */
interface GameInterface
{
    /**
     * @return ApiInterface
     */
    public function getMessenger(): ApiInterface;
}
