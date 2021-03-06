<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;

/**
 * Class CheckAction
 */
class CheckAction implements ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        foreach ($game->getActiveCard()->getEffects() as $effect) {
            $game->act(new EffectAction($effect));
        }
    }
}
