<?php

namespace Common\Game\Card;

/**
 * Interface CardFactoryInterface
 */
interface CardFactoryInterface
{
    /**
     * @param null|string $color
     * @param null|string $type
     * @param int|null $rank
     *
     * @return CardInterface
     */
    public function create(
        ?string $color,
        ?string $type,
        ?int $rank
    ): CardInterface;
}

