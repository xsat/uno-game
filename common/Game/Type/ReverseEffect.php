<?php

namespace Common\Game\Type;

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
