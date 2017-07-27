<?php

namespace Common\Game\Card\Factory;

use Common\Game\Card\Card;
use Common\Game\Card\CardInterface;
use Common\Game\Color\ColorFactory;
use Common\Game\Effect\NullEffect;
use Common\Game\Rank\NumericRank;

/**
 * Class NumericFactory
 */
class NumericFactory implements FactoryInterface
{
    /**
     * @var int
     */
    private $number;

    /**
     * @var string
     */
    private $color;

    /**
     * NumericFactory constructor.
     *
     * @param int $number
     * @param string $color
     */
    public function __construct(int $number, string $color)
    {
        $this->number = $number;
        $this->color = $color;
    }

    /**
     * @return CardInterface
     */
    public function create(): CardInterface
    {
        return new Card(
            (new ColorFactory($this->color))->create(),
            new NumericRank($this->number),
            new NullEffect()
        );
    }
}
