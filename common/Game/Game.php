<?php

namespace Common\Game;

use Common\Action\ActionInterface;
use Common\Game\Card\CardInterface;
use Common\Game\Player\PlayerInterface;

/**
 * Class Game
 */
class Game implements GameInterface
{
    /**
     * @var PlayerInterface[]
     */
    private $players = [];

    /**
     * @var CardInterface[];
     */
    private $cards = [];

    /**
     * Game constructor.
     *
     * @param PlayerInterface[] $players
     */
    public function __construct(array $players)
    {
        $this->players = $players;

        $this->init();
        $this->rand();
    }

    private function init(): void
    {
        $this->cards = (new DeckFactory($this->players))->create();
    }

    private function rand(): void
    {
        shuffle($this->cards);
    }

    /**
     * @param ActionInterface $action
     */
    public function act(ActionInterface $action): void
    {

    }
}
