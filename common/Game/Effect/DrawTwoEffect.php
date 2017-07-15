<?php

namespace Common\Game\Effect;

/**
 * Class DrawTwoEffect
 */
class DrawTwoEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::DRAW_TWO;
    }
}
