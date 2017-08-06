<?php

namespace Common\Game\Action;

use Common\Game\GameInterface;

/**
 * Class DistributionAction
 */
class DistributionAction implements ActionInterface
{
    private const CARD_LIMIT = 7;

    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        foreach ($game->getPlayerCollection()->getCollection() as $player) {
            $player_cards = 0;

            foreach ($game->getCardCollection()->getCollection() as $card) {
                if ($player_cards++ >= self::CARD_LIMIT) {
                    break;
                }

                $player->getCardCollection()->push($card);
                $game->getCardCollection()->pad($card->getId());
            }
        }
    }
}
