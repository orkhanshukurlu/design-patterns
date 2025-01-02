<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

interface Mediator
{
    public function getUser(string $username): string;
}