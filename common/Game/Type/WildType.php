<?php

namespace Common\Game\Type;

/**
 * Class WildType
 */
class WildType implements TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return Type::WILD;
    }

    /**
     * @return bool
     */
    public function isSpecial(): bool {
        return true;
    }
}
