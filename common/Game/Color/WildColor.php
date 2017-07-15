<?php

namespace Common\Game\Color;

/**
 * Class WildColor
 */
class WildColor implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return Color::WILD;
    }
}
