<?php

namespace Common\Game\Card;

use Common\Game\Color\ColorFactoryInterface;
use Common\Game\Effect\EffectsFactoryInterface;
use Common\Game\Id\Id;
use Common\Game\Rank\RankFactoryInterface;
use Common\Game\Type\TypeFactoryInterface;

/**
 * Class CardFactory
 */
class CardFactory implements CardFactoryInterface
{
    /**
     * @var ColorFactoryInterface
     */
    private $coloFactory;

    /**
     * @var TypeFactoryInterface
     */
    private $typeFactory;

    /**
     * @var RankFactoryInterface
     */
    private $rankFactory;

    /**
     * @var EffectsFactoryInterface
     */
    private $effectsFactory;

    /**
     * CardFactory constructor.
     *
     * @param ColorFactoryInterface $coloFactory
     * @param TypeFactoryInterface $typeFactory
     * @param RankFactoryInterface $rankFactory
     * @param EffectsFactoryInterface $effectsFactory
     */
    public function __construct(
        ColorFactoryInterface $coloFactory,
        TypeFactoryInterface $typeFactory,
        RankFactoryInterface $rankFactory,
        EffectsFactoryInterface $effectsFactory
    )
    {
        $this->coloFactory = $coloFactory;
        $this->typeFactory = $typeFactory;
        $this->rankFactory = $rankFactory;
        $this->effectsFactory = $effectsFactory;
    }

    /**
     * @param int $id
     * @param null|string $color
     * @param null|string $type
     * @param int|null $rank
     *
     * @return CardInterface
     */
    public function create(
        int $id,
        ?string $color,
        ?string $type,
        ?int $rank
    ): CardInterface
    {
        return new Card(
            new Id($id),
            $this->coloFactory->create($type),
            $this->typeFactory->create($type),
            $this->rankFactory->create($rank),
            $this->effectsFactory->create($type)
        );
    }
}
