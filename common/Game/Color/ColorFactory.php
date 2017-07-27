<?php

namespace Common\Game\Color;

/**
 * Class ColorFactory
 */
class ColorFactory
{
    /**
     * @var array
     */
    private const COLORS = [
        Color::RED => RedColor::class,
        Color::GREEN => GreenColor::class,
        Color::BLUE => BlueColor::class,
        Color::YELLOW => YellowColor::class,
    ];

    /**
     * @var string
     */
    private $color;

    /**
     * ColorFactory constructor.
     *
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return ColorInterface
     */
    public function create(): ColorInterface
    {
        $class = self::COLORS[$this->color] ?? NullColor::class;
        return new $class();
    }
}
