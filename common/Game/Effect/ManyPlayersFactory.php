<?php

namespace Common\Game\Effect;

use Common\Game\Type\Type;

/**
 * Class ManyPlayersFactory
 */
class ManyPlayersFactory extends EffectsFactory
{
    /**
     * @return array
     */
    protected function getTypes(): array
    {
        return [
            Type::SKIP => [
                Effect::SKIP,
            ],
            Type::DRAW_TWO => [
                Effect::DRAW,
                Effect::DRAW,
                Effect::SKIP,
            ],
            Type::REVERSE => [
                Effect::REVERSE,
            ],
            Type::WILD => [
                Effect::WILD,
            ],
            Type::WILD_DRAW_FOUR => [
                Effect::WILD,
                Effect::DRAW,
                Effect::DRAW,
                Effect::DRAW,
                Effect::DRAW,
                Effect::SKIP,
            ],
        ];
    }
}