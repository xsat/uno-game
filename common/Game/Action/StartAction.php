<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;

/**
 * Class StartAction
 */
class StartAction implements ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        $game->getCardCollection()->rand();
        $game->getPlayerCollection()->rand();
    }
}
