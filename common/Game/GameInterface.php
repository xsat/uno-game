<?php

namespace Common\Game;

use Common\Game\Action\ActionInterface;
use Common\Game\Card\CardCollectionInterface;
use Common\Game\Card\CardInterface;
use Common\Game\Player\PlayerCollectionInterface;
use Common\Game\Player\PlayerInterface;

/**
 * Interface GameInterface
 */
interface GameInterface
{
    /**
     * @param ActionInterface $action
     */
    public function act(ActionInterface $action): void;

    /**
     * @return PlayerCollectionInterface
     */
    public function getPlayerCollection(): PlayerCollectionInterface;

    /**
     * @return CardCollectionInterface
     */
    public function getCardCollection(): CardCollectionInterface;

    /**
     * @return PlayerInterface|null
     */
    public function getActivePlayer(): ?PlayerInterface;

    /**
     * @param PlayerInterface|null $player
     */
    public function setActivePlayer(?PlayerInterface $player): void;

    /**
     * @return CardInterface|null
     */
    public function getActiveCard(): ?CardInterface;

    /**
     * @param CardInterface|null $card
     */
    public function setActiveCard(?CardInterface $card): void;
}
