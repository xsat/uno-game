<?php

namespace Common\Loader\Action;

use Common\Action\ActionInterface;

/**
 * Class ActionWrapper
 */
class ActionWrapper implements LoaderInterface {
    /**
     * @var ActionInterface
     */
    private $action;

    /**
     * ActionWrapper constructor.
     *
     * @param ActionInterface $action
     */
    public function __construct(ActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * @return ActionInterface
     */
    public function load(): ActionInterface
    {
        return $this->action;
    }
}
