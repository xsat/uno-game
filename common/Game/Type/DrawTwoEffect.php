<?php

namespace Common\Game\Type;

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
