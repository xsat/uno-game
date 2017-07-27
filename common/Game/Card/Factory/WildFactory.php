<?php

namespace Common\Game\Card\Factory;

use Common\Game\Card\Card;
use Common\Game\Card\CardInterface;
use Common\Game\Color\NullColor;
use Common\Game\Effect\EffectFactory;
use Common\Game\Rank\NullRank;

/**
 * Class WildFactory
 */
class WildFactory implements FactoryInterface
{
    /**
     * @var string
     */
    private $effect;

    /**
     * WildFactory constructor.
     *
     * @param string $effect
     */
    public function __construct(string $effect)
    {
        $this->effect = $effect;
    }

    /**
     * @return CardInterface
     */
    public function create(): CardInterface
    {
        return new Card(
            new NullColor(),
            new NullRank(),
            (new EffectFactory($this->effect))->create()
        );
    }
}
