<?php

namespace Common\Game\Type;

/**
 * Class SkipType
 */
class SkipType implements TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return Type::SKIP;
    }

    /**
     * @return bool
     */
    public function isSpecial(): bool {
        return true;
    }
}
