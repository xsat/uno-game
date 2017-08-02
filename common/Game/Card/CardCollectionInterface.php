<?php

namespace Common\Game\Card;

use Common\Game\Id\IdInterface;

/**
 * Interface CardCollectionInterface
 */
interface CardCollectionInterface
{
    /**
     * @param CardInterface $card
     */
    public function push(CardInterface $card): void;

    /**
     * @param IdInterface $id
     */
    public function pad(IdInterface $id): void;

    /**
     * @param IdInterface $id
     *
     * @return CardInterface|null
     */
    public function get(IdInterface $id): ?CardInterface;

    /**
     * @return CardInterface[]
     */
    public function getCollection(): array;
}
