<?php

declare(strict_types=1);

namespace Structural\Flyweight;

readonly class Character implements Text
{
    public function __construct(private string $name)
    {
    }

    public function render(string $extrinsicState): string
    {
        return sprintf('Character %s with font %s', $this->name, $extrinsicState);
    }
}