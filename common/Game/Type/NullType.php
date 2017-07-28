<?php

namespace Common\Game\Type;

/**
 * Class NullType
 */
class NullType implements TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return Type::NULL;
    }
}
