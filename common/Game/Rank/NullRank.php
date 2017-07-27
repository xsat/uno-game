<?php

namespace Common\Game\Rank;

/**
 * Class NullRank
 */
class NullRank implements RankInterface
{
    /**
     * @return int
     */
    public function getRank(): int
    {
        return 0;
    }
}
