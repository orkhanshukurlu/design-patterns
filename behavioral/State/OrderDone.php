<?php

declare(strict_types=1);

namespace Behavioral\State;

class OrderDone implements StateOrder
{
    public function proceedToNext(ContextOrder $context): void
    {
    }

    public function toString(): string
    {
        return 'done';
    }
}