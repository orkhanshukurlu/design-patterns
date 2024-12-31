<?php

declare(strict_types=1);

namespace Behavioral\State\Tests;

use Behavioral\State\ContextOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testIsCreatedWithStateCreated(): void
    {
        $orderContext = ContextOrder::create();

        $this->assertSame('created', $orderContext->toString());
    }

    public function testCanProceedToStateShipped(): void
    {
        $contextOrder = ContextOrder::create();
        $contextOrder->proceedToNext();

        $this->assertSame('shipped', $contextOrder->toString());
    }

    public function testCanProceedToStateDone(): void
    {
        $contextOrder = ContextOrder::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        $this->assertSame('done', $contextOrder->toString());
    }

    public function testStateDoneIsTheLastPossibleState(): void
    {
        $contextOrder = ContextOrder::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        $this->assertSame('done', $contextOrder->toString());
    }
}
