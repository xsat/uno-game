<?php

namespace Common\Game;

use Common\Game\Card\CardFactory;
use Common\Game\Card\CardFactoryInterface;
use Common\Game\Card\CardInterface;
use Common\Game\Color\Color;
use Common\Game\Color\ColorFactory;
use Common\Game\Color\ColorFactoryInterface;
use Common\Game\Effect\EffectsFactoryInterface;
use Common\Game\Effect\ManyPlayersFactory;
use Common\Game\Effect\TwoPlayersFactory;
use Common\Game\Player\PlayerInterface;
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
     * @var CardInterface[]
     */
    private $cards = [];

    /**
     * @var CardFactoryInterface
     */
    private $cardFactory;

    /**
     * DeckFactory constructor.
     *
     * @param PlayerInterface[] $players
     */
    public function __construct(array $players)
    {
        $this->cardFactory = new CardFactory(
            $this->createColorFactory(),
            $this->createTypeFactory(),
            $this->createRankFactory(),
            $this->createEffectsFactory(count($players))
        );
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
     * @return CardInterface[]
     */
    public function create(): array
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

        return $this->cards;
    }

    private function appendWild(): void
    {
        $this->cards[] = $this->cardFactory->create(null, Type::WILD, null);
        $this->cards[] = $this->cardFactory->create(null, Type::WILD_DRAW_FOUR, null);
    }

    /**
     * @param int $rank
     */
    private function appendRanked(int $rank): void
    {
        $this->cards[] = $this->cardFactory->create(Color::RED, null, $rank);
        $this->cards[] = $this->cardFactory->create(Color::GREEN, null, $rank);
        $this->cards[] = $this->cardFactory->create(Color::BLUE, null, $rank);
        $this->cards[] = $this->cardFactory->create(Color::YELLOW, null, $rank);
    }

    /**
     * @param string $type
     */
    private function appendSpecial(string $type): void
    {
        $this->cards[] = $this->cardFactory->create(Color::RED, $type, null);
        $this->cards[] = $this->cardFactory->create(Color::GREEN, $type, null);
        $this->cards[] = $this->cardFactory->create(Color::BLUE, $type, null);
        $this->cards[] = $this->cardFactory->create(Color::YELLOW, $type, null);
    }
}
