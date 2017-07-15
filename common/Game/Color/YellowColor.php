<?php

namespace Common\Game\Color;

/**
 * Class YellowColor
 */
class YellowColor implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return Color::YELLOW;
    }
}
