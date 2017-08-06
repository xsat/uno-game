<?php

namespace Common\Game\Helper;

use Common\Game\Card\CardInterface;
use Common\Game\Color\Color;

/**
 * Class CardHelper
 */
class CardHelper
{
    /**
     * @param CardInterface $first
     * @param CardInterface $second
     *
     * @return bool
     */
    public static function isMatch(
        CardInterface $first,
        CardInterface $second
    ): bool
    {
        if ($first->getColor()->getColor() == $second->getColor()->getColor() && $second->getColor()->getColor() != Color::NULL) {
            return true;
        }

        return false;
    }
}
