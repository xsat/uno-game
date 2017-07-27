<?php

namespace Common\Game\Type;

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
