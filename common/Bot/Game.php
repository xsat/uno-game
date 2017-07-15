<?php

namespace Common\Bot;

use Messenger\Api\ApiInterface;
use Messenger\Api\Message\MessageInterface;
use Messenger\Api\Message\Quick\ReplyInterface;
use Messenger\Api\Message\Quick\TextReply;
use Messenger\Api\Recipient\Id;

/**
 * Class Game
 */
class Game implements BotInterface
{
    /**
     * @var ApiInterface
     */
    private $api;

    /**
     * Game constructor.
     *
     * @param ApiInterface $api
     */
    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    /**
     * @param MessageInterface $message
     *
     * @return array
     */
    public function send(MessageInterface $message): array
    {
        return $this->api->send(new Id(getenv('BOT_ID')), $message);
    }

    /**
     * @return ReplyInterface[]
     */
    public function replies(): array
    {
        return [
            new TextReply('New game', 'NEW_GAME'),
            new TextReply('Help', 'HELP'),
        ];
    }
}
