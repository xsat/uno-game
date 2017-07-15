<?php

namespace Common\Game\Card;

use Common\Game\Color\ColorInterface;
use Common\Game\Effect\EffectInterface;
use Common\Game\Rank\RankInterface;

/**
 * Interface CardInterface
 */
interface CardInterface
{
    /**
     * @return ColorInterface
     */
    public function getColor(): ColorInterface;

    /**
     * @return RankInterface
     */
    public function getRank(): RankInterface;

    /**
     * @return EffectInterface
     */
    public function getEffect(): EffectInterface;

    /**
     * @param CardInterface $card
     *
     * @return bool
     */
    public function isMatch(CardInterface $card): bool;
}
