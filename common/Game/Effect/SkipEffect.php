<?php

namespace Common\Game\Effect;

/**
 * Class SkipEffect
 */
class SkipEffect implements EffectInterface
{
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return Effect::SKIP;
    }
}
