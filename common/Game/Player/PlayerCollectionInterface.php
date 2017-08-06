<?php

namespace Common\Game\Player;


use Common\Game\Id\IdInterface;

/**
 * Interface CardCollectionInterface
 */
interface PlayerCollectionInterface
{
    /**
     * @param PlayerInterface $player
     */
    public function push(PlayerInterface $player): void;

    /**
     * @param IdInterface $id
     */
    public function pad(IdInterface $id): void;

    /**
     * @param IdInterface $id
     *
     * @return PlayerInterface|null
     */
    public function get(IdInterface $id): ?PlayerInterface;

    /**
     * @param IdInterface $id
     *
     * @return PlayerInterface|null
     */
    public function next(IdInterface $id): ?PlayerInterface;

    /**
     * @param IdInterface $id
     *
     * @return PlayerInterface|null
     */
    public function prev(IdInterface $id): ?PlayerInterface;

    /**
     * @return PlayerInterface[]
     */
    public function getCollection(): array;

    /**
     * @return int
     */
    public function getCount(): int;

    public function rand(): void;
}
