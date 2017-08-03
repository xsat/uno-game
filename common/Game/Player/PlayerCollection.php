<?php

namespace Common\Game\Player;

use Common\Game\Id\IdInterface;

/**
 * Class PlayerCollection
 */
class PlayerCollection implements PlayerCollectionInterface
{
    /**
     * @var PlayerInterface[]
     */
    private $players = [];

    /**
     * PlayerCollection constructor.
     *
     * @param PlayerInterface[] $players
     */
    public function __construct($players = [])
    {
        $this->setCollection($players);
    }

    /**
     * @param PlayerInterface[] $players
     */
    private function setCollection(array $players): void
    {
        foreach ($players as $player) {
            $this->push($player);
        }
    }

    /**
     * @param PlayerInterface $player
     */
    public function push(PlayerInterface $player): void
    {
        $this->players[$player->getId()->getId()] = $player;
    }

    /**
     * @param IdInterface $id
     */
    public function pad(IdInterface $id): void
    {
        $this->players[$id->getId()] = null;
        unset($this->players[$id->getId()]);
    }

    /**
     * @param IdInterface $id
     *
     * @return PlayerInterface|null
     */
    public function get(IdInterface $id): ?PlayerInterface
    {
        return $this->players[$id->getId()] ?? null;
    }

    /**
     * @return PlayerInterface[]
     */
    public function getCollection(): array
    {
        return $this->players;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return count($this->players);
    }
}
