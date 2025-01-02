<?php

declare(strict_types=1);

namespace More\EAV;

use Stringable;

readonly class Value implements Stringable
{
    public function __construct(private Attribute $attribute, private string $name)
    {
        $attribute->addValue($this);
    }

    public function __toString(): string
    {
        return sprintf('%s: %s', $this->attribute, $this->name);
    }
}