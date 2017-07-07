<?php

namespace Common\Action;

use Common\Game\GameInterface;

/**
 * Interface ActionInterface
 */
interface ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void;
}
