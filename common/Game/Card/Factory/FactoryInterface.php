<?php

namespace Common\Game\Card\Factory;

use Common\Game\Card\CardInterface;

/**
 * Interface FactoryInterface
 */
interface FactoryInterface
{
    /**
     * @return CardInterface
     */
    public function create(): CardInterface;
}
