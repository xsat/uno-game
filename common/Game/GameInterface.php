<?php

namespace Common\Game;

use Messenger\Api\Message\MessageInterface;

/**
 * Interface GameInterface
 */
interface GameInterface
{
    /**
     * @param MessageInterface $message
     *
     * @return array
     */
    public function send(MessageInterface $message): array;
}
