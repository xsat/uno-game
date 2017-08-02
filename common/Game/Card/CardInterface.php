<?php

namespace Common\Game\Card;

use Common\Game\Color\ColorInterface;
use Common\Game\Effect\EffectInterface;
use Common\Game\Id\IdInterface;
use Common\Game\Rank\RankInterface;
use Common\Game\Type\TypeInterface;

/**
 * Interface CardInterface
 */
interface CardInterface
{
    /**
     * @return IdInterface
     */
    public function getId(): IdInterface;

    /**
     * @return ColorInterface
     */
    public function getColor(): ColorInterface;

    /**
     * @return RankInterface
     */
    public function getRank(): RankInterface;

    /**
     * @return TypeInterface
     */
    public function getType(): TypeInterface;

    /**
     * @return EffectInterface[]
     */
    public function getEffects(): array;

    /**
     * @param CardInterface $card
     *
     * @return bool
     */
    public function isMatch(CardInterface $card): bool;
}
