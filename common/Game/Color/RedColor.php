<?php

namespace Common\Game\Color;

/**
 * Class RedColor
 */
class RedColor implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return Color::RED;
    }
}
