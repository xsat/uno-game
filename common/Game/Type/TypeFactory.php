<?php

namespace Common\Game\Type;

/**
 * Class TypeFactory
 */
class TypeFactory
{
    /**
     * @var array
     */
    private const TYPES = [
        Type::SKIP => SkipType::class,
        Type::DRAW_TWO => DrawTwoType::class,
        Type::REVERSE => ReverseType::class,
        Type::WILD => WildType::class,
        Type::WILD_DRAW_FOUR => WildDrawFourType::class,
    ];

    /**
     * @var string
     */
    private $type;

    /**
     * TypeFactory constructor.
     *
     * @param string $Type
     */
    public function __construct(string $Type)
    {
        $this->type = $Type;
    }

    /**
     * @return TypeInterface
     */
    public function create(): TypeInterface
    {
        $class = self::TYPES[$this->type] ?? NullType::class;
        return new $class();
    }
}
