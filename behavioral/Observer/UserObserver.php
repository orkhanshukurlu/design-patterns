<?php

declare(strict_types=1);

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    private array $changedUsers = [];

    public function update(SplSubject $subject): void
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}