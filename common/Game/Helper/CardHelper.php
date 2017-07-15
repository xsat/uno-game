<?php

namespace Common\Game\Helper;

use Common\Game\Card\CardInterface;

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
        return false;
    }
}
