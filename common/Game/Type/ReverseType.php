<?php

namespace Common\Game\Type;

/**
 * Class ReverseType
 */
class ReverseType implements TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return Type::REVERSE;
    }

    /**
     * @return bool
     */
    public function isSpecial(): bool {
        return true;
    }
}
