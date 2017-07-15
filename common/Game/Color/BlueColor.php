<?php

namespace Common\Game\Color;

/**
 * Class BlueColor
 */
class BlueColor implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return Color::BLUE;
    }
}
