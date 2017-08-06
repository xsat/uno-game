<?php

namespace Common\Game\Action;

use Common\Game\Effect\EffectInterface;
use Common\Game\GameInterface;

/**
 * Class EffectAction
 */
class EffectAction implements ActionInterface
{
    /**
     * @var EffectInterface;
     */
    private $effect;

    /**
     * EffectAction constructor.
     *
     * @param EffectInterface $effect
     */
    public function __construct(EffectInterface $effect)
    {
        $this->effect = $effect;
    }

    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
    }
}
