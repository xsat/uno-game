<?php

namespace Common\Game\Effect;

/**
 * Class DrawEffect
 */
class DrawEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::DRAW;
    }
}
