<?php

declare(strict_types=1);

namespace Behavioral\Specification;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}
