<?php

namespace Common\Game\Card;

use Common\Game\Id\IdInterface;

/**
 * Class CardCollection
 */
class CardCollection implements CardCollectionInterface
{
    /**
     * @var CardInterface[]
     */
    private $cards = [];

    /**
     * CardCollection constructor.
     *
     * @param CardInterface[] $cards
     */
    public function __construct($cards = [])
    {
        $this->setCollection($cards);
    }

    /**
     * @param CardInterface[] $cards
     */
    private function setCollection(array $cards): void
    {
        foreach ($cards as $card) {
            $this->push($card);
        }
    }

    /**
     * @param CardInterface $card
     */
    public function push(CardInterface $card): void
    {
        $this->cards[$card->getId()->getId()] = $card;
    }

    /**
     * @param IdInterface $id
     */
    public function pad(IdInterface $id): void
    {
        $this->cards[$id->getId()] = null;
        unset($this->cards[$id->getId()]);
    }

    /**
     * @param IdInterface $id
     *
     * @return CardInterface|null
     */
    public function get(IdInterface $id): ?CardInterface
    {
        return $this->cards[$id->getId()] ?? null;
    }

    /**
     * @param IdInterface $id
     *
     * @return CardInterface|null
     */
    public function next(IdInterface $id): ?CardInterface
    {
        $players = array_values($this->cards);
        $player_key = array_search($this->get($id), $players);

        return $players[++$player_key] ?? null;
    }

    /**
     * @param IdInterface $id
     *
     * @return CardInterface|null
     */
    public function prev(IdInterface $id): ?CardInterface
    {
        $players = array_values($this->cards);
        $player_key = array_search($this->get($id), $players);

        return $players[--$player_key] ?? null;
    }

    /**
     * @return CardInterface[]
     */
    public function getCollection(): array
    {
        return $this->cards;
    }

    public function rand(): void
    {
        shuffle($this->cards);
    }
}
