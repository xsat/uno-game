<?php

namespace Common\Game\Rank;

/**
 * Class RankFactory
 */
class RankFactory implements RankFactoryInterface
{
    /**
     * @param int|null $rank
     *
     * @return RankInterface
     */
    public function create(?int $rank): RankInterface
    {
        return $rank ? new NumericRank($rank) : new NullRank();
    }
}