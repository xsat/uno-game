<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;
use Common\Game\Player\PlayerInterface;

/**
 * Class FirstAction
 */
class FirstAction implements ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        foreach ($game->getCardCollection()->getCollection() as $card) {
            if ($card->getType()->isSpecial()) {
                continue;
            }

            $game->setActiveCard($card);
            $game->getCardCollection()->pad($card->getId());
        }

        /** @var PlayerInterface $player */
        $player = current($game->getPlayerCollection()->getCollection());

        $game->setActivePlayer($player);
        $game->getCardCollection()->pad($player->getId());
    }
}
