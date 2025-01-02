<?php

declare(strict_types=1);

namespace Structural\Proxy\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Proxy\BankAccountProxy;

class ProxyTest extends TestCase
{
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce(): void
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        $this->assertSame(30, $bankAccount->getBalance());

        $bankAccount->deposit(50);

        $this->assertSame(30, $bankAccount->getBalance());
    }
}