<?php

namespace Common;

use Common\Action\ActionInterface;
use Common\Game\GameInterface;
use Common\Loader\Action\LoaderInterface as ActionLoaderInterface;
use Common\Loader\Game\LoaderInterface as GameLoaderInterface;

/**
 * Class App
 */
class App
{
    /**
     * @var ActionInterface
     */
    private $action;

    /**
     * @var GameInterface
     */
    private $game;

    /**
     * App constructor.
     *
     * @param ActionLoaderInterface $actionLoader
     * @param GameLoaderInterface $gameLoader
     */
    public function __construct(
        ActionLoaderInterface $actionLoader,
        GameLoaderInterface $gameLoader
    )
    {
        $this->action = $actionLoader->load();
        $this->game = $gameLoader->load();
    }

    /**
     * Starts application
     */
    public function run(): void
    {
        $this->action->act($this->game);
    }
}
