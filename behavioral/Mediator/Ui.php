<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

class Ui extends Colleague
{
    public function outputUserInfo(string $username): void
    {
        echo $this->mediator->getUser($username);
    }
}