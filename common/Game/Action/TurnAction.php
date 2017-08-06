<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;
use Common\Game\Id\IdInterface;
use Common\Game\Helper\CardHelper;

/**
 * Class TurnAction
 */
class TurnAction implements ActionInterface
{
    /**
     * @var IdInterface
     */
    private $playerId;

    /**
     * @var IdInterface
     */
    private $cardId;

    /**
     * TurnAction constructor.
     *
     * @param IdInterface $playerId
     * @param IdInterface $cardId
     */
    public function __construct(IdInterface $playerId, IdInterface $cardId)
    {
        $this->playerId = $playerId;
        $this->cardId = $cardId;
    }

    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        $activePlayer = $game->getActivePlayer();

        if ($activePlayer->getId()->getId() != $this->playerId->getId()) {
            return;
        }

        $chosenCard = $activePlayer->getCardCollection()->get($this->cardId);

        if (!$chosenCard) {
            return;
        }

        if (!CardHelper::isMatch($game->getActiveCard(), $chosenCard)) {
            return;
        }

        $game->getCardCollection()->push($game->getActiveCard());
        $game->setActiveCard($chosenCard);
    }
}
