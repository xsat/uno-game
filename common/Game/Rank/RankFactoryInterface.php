<?php

namespace Common\Game\Rank;

/**
 * Interface RankFactoryInterface
 */
interface RankFactoryInterface
{
    /**
     * @param int|null $rank
     *
     * @return RankInterface
     */
    public function create(?int $rank): RankInterface;
}
