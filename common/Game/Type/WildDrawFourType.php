<?php

namespace Common\Game\Type;

/**
 * Class WildDrawFourType
 */
class WildDrawFourType implements TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return Type::WILD_DRAW_FOUR;
    }
}
