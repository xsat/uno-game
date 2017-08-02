<?php

namespace Common\Game;

use Common\Game\Action\ActionInterface;
use Common\Game\Card\CardCollectionInterface;
use Common\Game\Player\PlayerCollectionInterface;

/**
 * Class Game
 */
class Game implements GameInterface
{
    /**
     * @var PlayerCollectionInterface
     */
    private $playerCollection;

    /**
     * @var CardCollectionInterface
     */
    private $cardCollection;

    /**
     * Game constructor.
     *
     * @param PlayerCollectionInterface $playerCollection
     * @param CardCollectionInterface $cardCollection
     */
    public function __construct(
        PlayerCollectionInterface $playerCollection,
        CardCollectionInterface $cardCollection
    )
    {
        $this->playerCollection = $playerCollection;
        $this->cardCollection = $cardCollection;
    }

    /**
     * @param ActionInterface $action
     */
    public function act(ActionInterface $action): void
    {
        $action->act($this);
    }
}
