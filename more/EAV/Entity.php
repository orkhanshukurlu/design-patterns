<?php

declare(strict_types=1);

namespace More\EAV;

use SplObjectStorage;

class Entity implements \Stringable
{
    private SplObjectStorage $values;

    public function __construct(private readonly string $name, array $values)
    {
        $this->values = new SplObjectStorage();

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return join(', ', $text);
    }
}