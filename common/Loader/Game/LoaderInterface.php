<?php

namespace Common\Loader\Game;

use Common\Game\GameInterface;

/**
 * Interface LoaderInterface
 */
interface LoaderInterface
{
    /**
     * @return GameInterface
     */
    public function load(): GameInterface;
}
