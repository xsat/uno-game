<?php

namespace Common\Action;

use Common\Game\GameInterface;
use Messenger\Api\Message\Text;

/**
 * Class Action
 */
class Action implements ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        $game->send(new Text('Asadas'));
    }
}
