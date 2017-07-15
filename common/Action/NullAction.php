<?php

namespace Common\Action;

use Common\Bot\BotInterface;
use Messenger\Api\Message\Quick\Replies;
use Messenger\Api\Message\Quick\TextReply;
use Messenger\Api\Message\Text;

/**
 * Class NullAction
 */
class NullAction implements ActionInterface
{
    /**
     * @param BotInterface $bot
     */
    public function act(BotInterface $bot): void
    {
        $bot->send(
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
