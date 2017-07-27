<?php

namespace Common\Game\Player;

use Common\Action\ActionInterface;
//use Common\Game\Card\CardInterface;

/**
 * Interface PlayerInterface
 */
interface PlayerInterface
{
//    /**
//     * @return string
//     */
//    public function getName(): string;
//
    /**
     * @return ActionInterface
     */
    public function getAction(): ActionInterface;
//
//    /**
//     * @return int
//     */
//    public function getPoints(): int;
//
//    /**
//     * @param int $points
//     */
//    public function setPoints(int $points): void;
//
//    /**
//     * @return CardInterface[]
//     */
//    public function getCards(): array;
//
//    /**
//     * @param CardInterface[] $cards
//     */
//    public function setCards(array $cards): void;
//
//    /**
//     * @return CardInterface
//     */
//    public function playCard(): CardInterface;
}
