<?php

namespace Common\Game\Effect;

/**
 * Class EffectsFactory
 */
abstract class EffectsFactory implements EffectsFactoryInterface
{
    /**
     * @var string
     */
    private $types;

    /**
     * @var EffectFactory
     */
    private $effectFactory;

    /**
     * EffectsFactory constructor.
     */
    public final function __construct()
    {
        $this->types = $this->getTypes();
        $this->effectFactory = new EffectFactory();
    }

    /**
     * @return array
     */
    protected abstract function getTypes(): array;

    /**
     * @param null|string $type
     * @return array
     */
    public final function create(?string $type): array
    {
        if (!isset($this->types[$type])) {
            return [];
        }

        $effects = [];

        foreach ($this->types[$type] as $effect) {
            $effects[] = $this->effectFactory->create($effect);
        }

        return $effects;
    }
}
