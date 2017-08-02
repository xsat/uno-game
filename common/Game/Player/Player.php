<?php

namespace Common\Game\Player;

use Common\Game\Card\CardCollectionInterface;
use Common\Game\Id\IdInterface;

/**
 * Class Player
 */
class Player implements PlayerInterface
{
    /**
     * @var IdInterface
     */
    private $id;

    /**
     * @var CardCollectionInterface
     */
    private $cardCollection;

    /**
     * Player constructor.
     *
     * @param IdInterface $id
     * @param CardCollectionInterface $cardCollection
     */
    public function __construct(
        IdInterface $id,
        CardCollectionInterface $cardCollection
    )
    {
        $this->id = $id;
        $this->cardCollection = $cardCollection;
    }

    /**
     * @return IdInterface
     */
    public function getId(): IdInterface
    {
        return $this->id;
    }

    /**
     * @return CardCollectionInterface
     */
    public function getCardCollection(): CardCollectionInterface
    {
        return $this->cardCollection;
    }
}
