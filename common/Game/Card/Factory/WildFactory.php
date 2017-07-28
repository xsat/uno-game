<?php

namespace Common\Game\Card\Factory;

use Common\Game\Card\Card;
use Common\Game\Card\CardInterface;
use Common\Game\Color\NullColor;
use Common\Game\Effect\EffectFactory;
use Common\Game\Type\TypeFactory;
use Common\Game\Rank\NullRank;

/**
 * Class WildFactory
 */
class WildFactory implements FactoryInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * WildFactory constructor.
     *
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return CardInterface
     */
    public function create(): CardInterface
    {
        return new Card(
            new NullColor(),
            new NullRank(),
            (new TypeFactory($this->type))->create()
        );
    }
}
