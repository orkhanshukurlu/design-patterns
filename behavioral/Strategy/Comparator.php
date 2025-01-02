<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

interface Comparator
{
    public function compare(mixed $a, mixed $b): int;
}