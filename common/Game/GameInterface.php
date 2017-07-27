<?php

namespace Common\Game;

use Common\Action\ActionInterface;

/**
 * Interface GameInterface
 */
interface GameInterface
{
    /**
     * @param ActionInterface $action
     */
    public function act(ActionInterface $action): void;
}
