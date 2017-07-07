<?php

namespace Common\Loader\Action;

use Common\Action\ActionInterface;

/**
 * Interface LoaderInterface
 */
interface LoaderInterface
{
    /**
     * @return ActionInterface
     */
    public function load(): ActionInterface;
}
