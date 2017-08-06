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
//        if ($first->getColor()->getColor() == Color::WILD) {
//            return true;
//        }
//
//        if ($first->getColor()->getColor() == $second->getColor()->getColor()) {
//            return true;
//        }
//
//        if ($first->getRank()->getRank() == $second->getRank()->getRank()) {
//            return true;
//        }
//
//        if ($first->getEffect()->getEffect() == $second->getEffect()->getEffect()) {
//            return true;
//        }

        return false;
    }
}
