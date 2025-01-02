<?php

declare(strict_types=1);

namespace Structural\Flyweight;

interface Text
{
    public function render(string $extrinsicState): string;
}