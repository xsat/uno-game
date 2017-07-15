<?php

namespace Common\Game\Effect;

/**
 * Class WildDrawFourEffect
 */
class WildDrawFourEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::WILD_DRAW_FOUR;
    }
}
