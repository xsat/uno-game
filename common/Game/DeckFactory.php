<?php

namespace Common\Game;

use Common\Game\Card\CardInterface;
use Common\Game\Card\Factory\NumericFactory;
use Common\Game\Card\Factory\SpecialFactory;
use Common\Game\Card\Factory\WildFactory;
use Common\Game\Color\Color;
use Common\Game\Effect\Effect;
use Common\Game\Player\PlayerInterface;

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
     * @var int
     */
    private $players_count;

    /**
     * DeckFactory constructor.
     *
     * @param PlayerInterface[] $players
     */
    public function __construct(array $players)
    {
        $this->players_count = count($players);
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
        $this->appendNumeric(0);

        foreach (range(1, 9) as $number) {
            $this->appendNumeric($number);
            $this->appendNumeric($number);
        }

        $this->appendSpecial(Effect::SKIP);
        $this->appendSpecial(Effect::DRAW_TWO);
        $this->appendSpecial(Effect::REVERSE);
        $this->appendSpecial(Effect::SKIP);
        $this->appendSpecial(Effect::DRAW_TWO);
        $this->appendSpecial(Effect::REVERSE);

        return $this->cards;
    }

    /**
     * @param int $number
     */
    private function appendNumeric(int $number): void
    {
        $this->cards[] = (new NumericFactory($number, Color::RED))->create();
        $this->cards[] = (new NumericFactory($number, Color::GREEN))->create();
        $this->cards[] = (new NumericFactory($number, Color::BLUE))->create();
        $this->cards[] = (new NumericFactory($number, Color::YELLOW))->create();
    }

    private function appendWild(): void
    {
        $this->cards[] = (new WildFactory(Effect::WILD))->create();
        $this->cards[] = (new WildFactory(Effect::WILD_DRAW_FOUR))->create();
    }

    /**
     * @param string $effect
     */
    private function appendSpecial(string $effect): void
    {
        $this->cards[] = (new SpecialFactory($effect, Color::RED))->create();
        $this->cards[] = (new SpecialFactory($effect, Color::GREEN))->create();
        $this->cards[] = (new SpecialFactory($effect, Color::BLUE))->create();
        $this->cards[] = (new SpecialFactory($effect, Color::YELLOW))->create();
    }
}
