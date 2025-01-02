<?php

declare(strict_types=1);

namespace Structural\Proxy;

class HeavyBankAccount implements BankAccount
{
    private array $transactions = [];

    public function deposit(int $amount): void
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        return array_sum($this->transactions);
    }
}