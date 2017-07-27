<?php

namespace Common\Game\Card\Factory;

use Common\Game\Card\Card;
use Common\Game\Card\CardInterface;
use Common\Game\Color\ColorFactory;
use Common\Game\Effect\EffectFactory;
use Common\Game\Rank\NullRank;

/**
 * Class SpecialFactory
 */
class SpecialFactory implements FactoryInterface
{
    /**
     * @var string
     */
    private $effect;

    /**
     * @var string
     */
    private $color;

    /**
     * WildFactory constructor.
     *
     * @param string $effect
     * @param string $color
     */
    public function __construct(string $effect, string $color)
    {
        $this->effect = $effect;
        $this->color = $color;
    }

    /**
     * @return CardInterface
     */
    public function create(): CardInterface
    {
        return new Card(
            (new ColorFactory($this->color))->create(),
            new NullRank(),
            (new EffectFactory($this->effect))->create()
        );
    }
}
