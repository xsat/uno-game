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
    private const EFFECTS = [
        Effect::SKIP => SkipEffect::class,
        Effect::DRAW_TWO => DrawTwoEffect::class,
        Effect::REVERSE => ReverseEffect::class,
        Effect::WILD => WildEffect::class,
        Effect::WILD_DRAW_FOUR => WildDrawFourEffect::class,
    ];

    /**
     * @var string
     */
    private $effect;

    /**
     * EffectFactory constructor.
     *
     * @param string $effect
     */
    public function __construct(string $effect)
    {
        $this->effect = $effect;
    }

    /**
     * @return EffectInterface
     */
    public function create(): EffectInterface
    {
        $class = self::EFFECTS[$this->effect] ?? NullEffect::class;
        return new $class();
    }
}
