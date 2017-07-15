<?php

namespace Common\Action;

use Common\Bot\BotInterface;

/**
 * Interface ActionInterface
 */
interface ActionInterface
{
    /**
     * @param BotInterface $bot
     */
    public function act(BotInterface $bot): void;
}
