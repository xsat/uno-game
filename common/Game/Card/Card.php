<?php

namespace Common\Game\Card;

use Common\Game\Color\ColorInterface;
use Common\Game\Effect\EffectInterface;
use Common\Game\Helper\CardHelper;
use Common\Game\Rank\RankInterface;
use Common\Game\Type\TypeInterface;

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
     * @var TypeInterface
     */
    private $type;

    /**
     * @var EffectInterface[]
     */
    private $effects = [];

    /**
     * Card constructor.
     *
     * @param ColorInterface $color
     * @param RankInterface $rank
     * @param TypeInterface $type
     * @param EffectInterface[] $effects
     */
    public function __construct(
        ColorInterface $color,
        RankInterface $rank,
        TypeInterface $type,
        array $effects = []
    )
    {
        $this->color = $color;
        $this->rank = $rank;
        $this->type = $type;
        $this->effects = $effects;
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

    /**
     * @return TypeInterface
     */
    public function getType(): TypeInterface
    {
        return $this->type;
    }

    /**
     * @return EffectInterface[]
     */
    public function getEffects(): array
    {
        return $this->effects;
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
