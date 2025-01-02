<?php

declare(strict_types=1);

namespace Structural\Composite;

readonly class TextElement implements Renderable
{
    public function __construct(private string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}