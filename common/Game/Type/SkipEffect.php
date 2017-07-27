<?php

namespace Common\Game\Type;

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
