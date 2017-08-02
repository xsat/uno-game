<?php

namespace Common\Game\Card;

/**
 * Interface CardFactoryInterface
 */
interface CardFactoryInterface
{
    /**
     * @param int $id
     * @param null|string $color
     * @param null|string $type
     * @param int|null $rank
     *
     * @return CardInterface
     */
    public function create(
        int $id,
        ?string $color,
        ?string $type,
        ?int $rank
    ): CardInterface;
}

