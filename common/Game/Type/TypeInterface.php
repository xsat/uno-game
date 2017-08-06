<?php

namespace Common\Game\Type;

/**
 * Interface TypeInterface
 */
interface TypeInterface
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return bool
     */
    public function isSpecial(): bool;
}
