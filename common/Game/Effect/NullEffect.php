<?php

namespace Common\Game\Effect;

/**
 * Class NullEffect
 */
class NullEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::NULL;
    }
}
