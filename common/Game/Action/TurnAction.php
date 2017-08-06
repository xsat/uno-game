<?php

namespace Common\Game\Action;

use Common\Game\Card\CardException;
use Common\Game\GameInterface;
use Common\Game\Helper\CardHelper;
use Common\Game\Id\IdInterface;
use Common\Game\Player\PlayerException;

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
     *
     * @throws PlayerException
     * @throws CardException
     */
    public function act(GameInterface $game): void
    {
        $activePlayer = $game->getActivePlayer();

        if ($activePlayer->getId()->getId() != $this->playerId->getId()) {
            throw new PlayerException('It\'s not your turn.');
        }

        $chosenCard = $activePlayer->getCardCollection()->get($this->cardId);

        if (!$chosenCard) {
            throw new CardException('You don\'t have this card in your deck.');
        }

        if (!CardHelper::isMatch($game->getActiveCard(), $chosenCard)) {
            throw new CardException('You can\'t play this card.');
        }

        $game->getCardCollection()->push($game->getActiveCard());
        $game->setActiveCard($chosenCard);
    }
}
