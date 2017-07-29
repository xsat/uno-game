<?php

namespace Common\Game\Color;

/**
 * Class ColorFactory
 */
class ColorFactory implements ColorFactoryInterface
{
    /**
     * @var array
     */
    private $colors = [
        Color::RED => RedColor::class,
        Color::GREEN => GreenColor::class,
        Color::BLUE => BlueColor::class,
        Color::YELLOW => YellowColor::class,
    ];

    /**
     * @param null|string $color
     *
     * @return ColorInterface
     */
    public function create(?string $color): ColorInterface
    {
        $class = $this->colors[$color] ?? NullColor::class;

        return new $class();
    }
}
