<?php

namespace Common\Game\Effect;

/**
 * Class ReverseEffect
 */
class ReverseEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::REVERSE;
    }
}
