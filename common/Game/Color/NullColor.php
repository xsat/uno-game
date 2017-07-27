<?php

namespace Common\Game\Color;

/**
 * Class NullColor
 */
class NullColor implements ColorInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return Color::NULL;
    }
}
