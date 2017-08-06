<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;

/**
 * Class UnoAction
 */
class UnoAction implements ActionInterface
{
    /**
     * @param GameInterface $game
     *
     * @throws ActionException
     */
    public function act(GameInterface $game): void
    {
        throw new ActionException();
    }
}
