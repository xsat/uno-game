<?php

namespace Common\Game\Effect;

/**
 * Class EffectFactory
 */
class EffectFactory
{
    /**
     * @var array
     */
    private $effects = [
        Effect::SKIP => SkipEffect::class,
        Effect::DRAW => DrawEffect::class,
        Effect::REVERSE => ReverseEffect::class,
        Effect::WILD => WildEffect::class,
    ];

    /**
     * @param null|string $effect
     *
     * @return EffectInterface
     */
    public function create(?string $effect): EffectInterface
    {
        $class = $this->effects[$effect] ?? NullEffect::class;
        return new $class();
    }
}
