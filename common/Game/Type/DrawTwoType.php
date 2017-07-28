<?php

namespace Common\Game\Type;

/**
 * Class DrawTwoType
 */
class DrawTwoType implements TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return Type::DRAW_TWO;
    }
}
