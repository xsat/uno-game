<?php

namespace Common\Game;

use Common\Game\Card\CardCollection;
use Common\Game\Card\CardCollectionInterface;
use Common\Game\Card\CardFactory;
use Common\Game\Card\CardFactoryInterface;
use Common\Game\Color\Color;
use Common\Game\Color\ColorFactory;
use Common\Game\Color\ColorFactoryInterface;
use Common\Game\Effect\EffectsFactoryInterface;
use Common\Game\Effect\ManyPlayersFactory;
use Common\Game\Effect\TwoPlayersFactory;
use Common\Game\Player\PlayerCollectionInterface;
use Common\Game\Rank\RankFactory;
use Common\Game\Rank\RankFactoryInterface;
use Common\Game\Type\Type;
use Common\Game\Type\TypeFactory;
use Common\Game\Type\TypeFactoryInterface;

/**
 * Class DeckFactory
 */
class DeckFactory
{
    /**
     * @var int
     */
    private $id = 0;

    /**
     * @var CardFactoryInterface
     */
    private $cardFactory;

    /**
     * @var CardCollectionInterface
     */
    private $cardCollection;

    /**
     * DeckFactory constructor.
     *
     * @param PlayerCollectionInterface $playerCollection
     */
    public function __construct(PlayerCollectionInterface $playerCollection)
    {
        $this->cardFactory = new CardFactory(
            $this->createColorFactory(),
            $this->createTypeFactory(),
            $this->createRankFactory(),
            $this->createEffectsFactory($playerCollection->getCount())
        );

        $this->cardCollection = new CardCollection();
    }

    /**
     * @return ColorFactoryInterface
     */
    private function createColorFactory(): ColorFactoryInterface
    {
        return new ColorFactory();
    }

    /**
     * @return TypeFactoryInterface
     */
    private function createTypeFactory(): TypeFactoryInterface
    {
        return new TypeFactory();
    }

    /**
     * @return RankFactoryInterface
     */
    private function createRankFactory(): RankFactoryInterface
    {
        return new RankFactory();
    }

    /**
     * @param int $players_count
     *
     * @return EffectsFactoryInterface
     */
    private function createEffectsFactory(int $players_count): EffectsFactoryInterface
    {
        if ($players_count == 2) {
            return new TwoPlayersFactory();
        }

        return new ManyPlayersFactory();
    }

    /**
     * @return CardCollectionInterface
     */
    public function create(): CardCollectionInterface
    {
        $this->appendWild();
        $this->appendWild();
        $this->appendWild();
        $this->appendWild();

        $this->appendRanked(0);

        foreach (range(1, 9) as $rank) {
            $this->appendRanked($rank);
            $this->appendRanked($rank);
        }

        $this->appendSpecial(Type::SKIP);
        $this->appendSpecial(Type::DRAW_TWO);
        $this->appendSpecial(Type::REVERSE);
        $this->appendSpecial(Type::SKIP);
        $this->appendSpecial(Type::DRAW_TWO);
        $this->appendSpecial(Type::REVERSE);

        return $this->cardCollection;
    }

    private function appendWild(): void
    {
        $this->cardCollection->push($this->cardFactory->create($this->id++, null, Type::WILD, null));
        $this->cardCollection->push($this->cardFactory->create($this->id++, null, Type::WILD_DRAW_FOUR, null));
    }

    /**
     * @param int $rank
     */
    private function appendRanked(int $rank): void
    {
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::RED, null, $rank));
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::GREEN, null, $rank));
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::BLUE, null, $rank));
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::YELLOW, null, $rank));
    }

    /**
     * @param string $type
     */
    private function appendSpecial(string $type): void
    {
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::RED, $type, null));
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::GREEN, $type, null));
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::BLUE, $type, null));
        $this->cardCollection->push($this->cardFactory->create($this->id++, Color::YELLOW, $type, null));
    }
}
