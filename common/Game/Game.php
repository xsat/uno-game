<?php

namespace Common\Game;

use Messenger\Api\ApiInterface;

/**
 * Class Game
 */
class Game implements GameInterface
{
    /**
     * @var ApiInterface
     */
    private $api;

    /**
     * Game constructor.
     *
     * @param ApiInterface $api
     */
    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    /**
     * @return ApiInterface
     */
    public function getMessenger(): ApiInterface
    {
        return $this->api;
    }
}
