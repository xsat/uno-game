<?php

namespace Common\Game\Player;

use Common\Game\Card\CardCollectionInterface;
use Common\Game\Id\IdInterface;

/**
 * Interface PlayerInterface
 */
interface PlayerInterface
{
    /**
     * @return IdInterface
     */
    public function getId(): IdInterface;

    /**
     * @return CardCollectionInterface
     */
    public function getCardCollection(): CardCollectionInterface;
}
