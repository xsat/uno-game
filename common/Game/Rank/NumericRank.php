<?php

namespace Common\Game\Rank;

/**
 * Class NumericRank
 */
class NumericRank implements RankInterface
{
    /**
     * @var int
     */
    private $rank;

    /**
     * NumericRank constructor.
     *
     * @param int $rank
     */
    public function __construct(int $rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }
}
