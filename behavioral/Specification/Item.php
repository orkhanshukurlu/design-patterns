<?php

declare(strict_types=1);

namespace Behavioral\Specification;

readonly class Item
{
    public function __construct(private float $price)
    {
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}