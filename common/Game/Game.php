<?php

namespace Common\Game;

use Common\Game\Action\ActionInterface;
use Common\Game\Card\CardCollectionInterface;
use Common\Game\Player\PlayerCollectionInterface;
use Common\Game\Player\PlayerInterface;

/**
 * Class Game
 */
class Game implements GameInterface
{
    /**
     * @var PlayerCollectionInterface
     */
    private $playerCollection;

    /**
     * @var CardCollectionInterface
     */
    private $cardCollection;

    /**
     * @var PlayerInterface
     */
    private $activePlayer;

    /**
     * Game constructor.
     * @param PlayerCollectionInterface $playerCollection
     * @param CardCollectionInterface $cardCollection
     * @param PlayerInterface|null $activePlayer
     */
    public function __construct(
        PlayerCollectionInterface $playerCollection,
        CardCollectionInterface $cardCollection,
        ?PlayerInterface $activePlayer = null
    )
    {
        $this->playerCollection = $playerCollection;
        $this->cardCollection = $cardCollection;
        $this->activePlayer = $activePlayer;
    }

    /**
     * @param ActionInterface $action
     */
    public function act(ActionInterface $action): void
    {
        $action->act($this);
    }

    /**
     * @return PlayerCollectionInterface
     */
    public function getPlayerCollection(): PlayerCollectionInterface
    {
        return $this->playerCollection;
    }

    /**
     * @return CardCollectionInterface
     */
    public function getCardCollection(): CardCollectionInterface
    {
        return $this->cardCollection;
    }

    /**
     * @return PlayerInterface|null
     */
    public function getActivePlayer(): ?PlayerInterface
    {
        return $this->activePlayer;
    }

    /**
     * @param PlayerInterface|null $player
     */
    public function setActivePlayer(?PlayerInterface $player): void
    {
        $this->activePlayer = $player;
    }
}
