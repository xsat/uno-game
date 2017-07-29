<?php

namespace Common\Game\Type;

/**
 * Interface TypeFactoryInterface
 */
interface TypeFactoryInterface
{
    /**
     * @param null|string $type
     *
     * @return TypeInterface
     */
    public function create(?string $type): TypeInterface;
}