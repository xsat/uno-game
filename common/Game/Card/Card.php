<?php

namespace Common\Game\Card;

use Common\Game\Id\IdInterface;
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
     * @var IdInterface
     */
    private $id;

    /**
     * @var ColorInterface
     */
    private $color;

    /**
     * @var TypeInterface
     */
    private $type;

    /**
     * @var RankInterface
     */
    private $rank;

    /**
     * @var EffectInterface[]
     */
    private $effects = [];

    /**
     * Card constructor.
     *
     * @param IdInterface $id;
     * @param ColorInterface $color
     * @param TypeInterface $type
     * @param RankInterface $rank
     * @param EffectInterface[] $effects
     */
    public function __construct(
        IdInterface $id,
        ColorInterface $color,
        TypeInterface $type,
        RankInterface $rank,
        array $effects
    )
    {
        $this->id = $id;
        $this->color = $color;
        $this->type = $type;
        $this->rank = $rank;
        $this->effects = $effects;
    }

    /**
     * @return IdInterface
     */
    public function getId(): IdInterface
    {
        return $this->id;
    }

    /**
     * @return ColorInterface
     */
    public function getColor(): ColorInterface
    {
        return $this->color;
    }

    /**
     * @return TypeInterface
     */
    public function getType(): TypeInterface
    {
        return $this->type;
    }

    /**
     * @return RankInterface
     */
    public function getRank(): RankInterface
    {
        return $this->rank;
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
