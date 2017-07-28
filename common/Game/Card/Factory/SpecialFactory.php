<?php

namespace Common\Game\Card\Factory;

use Common\Game\Card\Card;
use Common\Game\Card\CardInterface;
use Common\Game\Color\ColorFactory;
use Common\Game\Type\TypeFactory;
use Common\Game\Rank\NullRank;

/**
 * Class SpecialFactory
 */
class SpecialFactory implements FactoryInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $color;

    /**
     * WildFactory constructor.
     *
     * @param string $type
     * @param string $color
     */
    public function __construct(string $type, string $color)
    {
        $this->type = $type;
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
            (new TypeFactory($this->type))->create()
        );
    }
}
