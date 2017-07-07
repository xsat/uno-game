<?php

namespace Common\Loader\Game;

use Common\Game\GameInterface;

/**
 * Class GameWrapper
 */
class GameWrapper implements LoaderInterface
{
    /**
     * @var GameInterface
     */
    private $game;

    /**
     * GameWrapper constructor.
     *
     * @param GameInterface $game
     */
    public function __construct(GameInterface $game)
    {
        $this->game = $game;
    }

    /**
     * @return GameInterface
     */
    public function load(): GameInterface
    {
        return $this->game;
    }
}
