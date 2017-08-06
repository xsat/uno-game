<?php

namespace Common\Game;

use Common\Game\Action\ActionInterface;
use Common\Game\Card\CardCollectionInterface;
use Common\Game\Card\CardInterface;
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
     * @var CardInterface
     */
    private $activeCard;

    /**
     * Game constructor.
     * @param PlayerCollectionInterface $playerCollection
     * @param CardCollectionInterface $cardCollection
     * @param PlayerInterface|null $activePlayer
     * @param CardInterface|null $activeCard
     */
    public function __construct(
        PlayerCollectionInterface $playerCollection,
        CardCollectionInterface $cardCollection,
        ?PlayerInterface $activePlayer = null,
        ?CardInterface $activeCard = null
    )
    {
        $this->playerCollection = $playerCollection;
        $this->cardCollection = $cardCollection;
        $this->activePlayer = $activePlayer;
        $this->activeCard = $activeCard;
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

    /**
     * @return CardInterface|null
     */
    public function getActiveCard(): ?CardInterface
    {
        return $this->activeCard;
    }

    /**
     * @param CardInterface|null $card
     */
    public function setActiveCard(?CardInterface $card): void
    {
        $this->activeCard = $card;
    }
}
