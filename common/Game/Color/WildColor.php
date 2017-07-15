<?php

namespace Common\Game\Color;

/**
 * Class WildColor
 */
class WildColor implements ColorInterface
{
    /**
     * @var ColorInterface
     */
    private $color;

    /**
     * WildColor constructor.
     *
     * @param ColorInterface|null $color
     */
    public function __construct(?ColorInterface $color = null)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        if (!$this->color) {
            return Color::WILD;
        }

        return $this->color->getColor();
    }
}
