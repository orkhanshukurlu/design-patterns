<?php

declare(strict_types=1);

namespace Behavioral\Strategy;

use DateTime;

class DateComparator implements Comparator
{
    public function compare(mixed $a, mixed $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}