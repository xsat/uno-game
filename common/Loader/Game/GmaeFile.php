<?php

namespace Common\Loader\Game;

use Common\Game\Game;
use Common\Game\GameInterface;
use Nen\Http\RequestInterface;
use Messenger\Api\ApiInterface;

/**
 * Class GameFile
 */
class GameFile implements LoaderInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var ApiInterface
     */
    private $api;

    /**
     * GameFile constructor.
     *
     * @param RequestInterface $request
     * @param ApiInterface $api
     */
    public function __construct(RequestInterface $request, ApiInterface $api)
    {
        $this->request = $request;
        $this->api = $api;
    }

    /**
     * @return GameInterface
     */
    public function load(): GameInterface
    {
        return new Game($this->api);
    }
}
