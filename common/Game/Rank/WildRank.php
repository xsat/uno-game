<?php

namespace Common\Game\Rank;

/**
 * Class WildRank
 */
class WildRank implements RankInterface
{
    /**
     * @return int
     */
    public function getRank(): int
    {
        return 50;
    }
}
