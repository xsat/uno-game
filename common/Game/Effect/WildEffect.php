<?php

namespace Common\Game\Effect;

/**
 * Class WildEffect
 */
class WildEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::WILD;
    }
}
