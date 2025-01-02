<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

class IdComparator implements Comparator
{
    public function compare(mixed $a, mixed $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}