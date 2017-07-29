<?php

namespace Common\Game\Effect;

/**
 * Interface EffectsFactoryInterface
 */
interface EffectsFactoryInterface
{
    /**
     * @param null|string $type
     * @return array
     */
    public function create(?string $type): array;
}
