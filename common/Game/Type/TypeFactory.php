<?php

namespace Common\Game\Type;

/**
 * Class TypeFactory
 */
class TypeFactory implements TypeFactoryInterface
{
    /**
     * @var array
     */
    private $types = [
        Type::SKIP => SkipType::class,
        Type::DRAW_TWO => DrawTwoType::class,
        Type::REVERSE => ReverseType::class,
        Type::WILD => WildType::class,
        Type::WILD_DRAW_FOUR => WildDrawFourType::class,
    ];

    /**
     * @param null|string $type
     *
     * @return TypeInterface
     */
    public function create(?string $type): TypeInterface
    {
        $class = $this->types[$type] ?? NullType::class;

        return new $class();
    }
}
