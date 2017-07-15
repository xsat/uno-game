<?php

namespace Common\Game\Card;

use Common\Game\Color\ColorInterface;
use Common\Game\Effect\EffectInterface;
use Common\Game\Helper\CardHelper;
use Common\Game\Rank\RankInterface;

/**
 * Class Card
 */
class Card implements CardInterface
{
    /**
     * @var ColorInterface
     */
    private $color;

    /**
     * @var RankInterface
     */
    private $rank;

    /**
     * @var EffectInterface
     */
    private $effect;

    /**
     * Card constructor.
     *
     * @param ColorInterface $color
     * @param RankInterface $rank
     * @param EffectInterface $effect
     */
    public function __construct(
        ColorInterface $color,
        RankInterface $rank,
        EffectInterface $effect
    )
    {
        $this->color = $color;
        $this->rank = $rank;
        $this->effect = $effect;
    }

    /**
     * @return ColorInterface
     */
    public function getColor(): ColorInterface
    {
        return $this->color;
    }

    /**
     * @return RankInterface
     */
    public function getRank(): RankInterface
    {
        return $this->rank;
    }

    public function getEffect(): EffectInterface
    {
        return $this->effect;
    }

    /**
     * @param CardInterface $card
     *
     * @return bool
     */
    public function isMatch(CardInterface $card): bool
    {
        return CardHelper::isMatch($this, $card);
    }
}
