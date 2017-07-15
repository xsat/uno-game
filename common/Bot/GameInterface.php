<?php

namespace Common\Bot;

use Messenger\Api\Message\MessageInterface;

/**
 * Interface BotInterface
 */
interface BotInterface
{
    /**
     * @param MessageInterface $message
     *
     * @return array
     */
    public function send(MessageInterface $message): array;
}
