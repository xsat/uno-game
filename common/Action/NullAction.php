<?php

namespace Common\Action;

use Common\Game\GameInterface;
use Messenger\Api\Message\Quick\Replies;
use Messenger\Api\Message\Quick\TextReply;
use Messenger\Api\Message\Text;

/**
 * Class NullAction
 */
class NullAction implements ActionInterface
{
    /**
     * @param GameInterface $game
     */
    public function act(GameInterface $game): void
    {
        $game->send(
            new Replies(
                new Text('How can i help you?'),
                [
                    new TextReply('New game', 'NEW_GAME'),
                    new TextReply('Help', 'HELP'),
                ]
            )
        );
    }
}
