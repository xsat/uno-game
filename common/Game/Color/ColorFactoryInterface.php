<?php

namespace Common\Game\Color;

/**
 * Interface ColorFactoryInterface
 */
interface ColorFactoryInterface
{
    /**
     * @param null|string $color
     *
     * @return ColorInterface
     */
    public function create(?string $color): ColorInterface;
}