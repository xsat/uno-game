<?php

namespace Common\Game\Type;

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
