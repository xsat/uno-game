<?php

namespace Common\Game\Id;

/**
 * Class Id
 */
class Id implements IdInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * Id constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
