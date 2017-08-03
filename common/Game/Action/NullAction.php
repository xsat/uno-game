<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;

/**
 * Class NullAction
 */
class NullAction implements ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
    }
}
