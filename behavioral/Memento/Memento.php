<?php

declare(strict_types=1);

namespace Behavioral\Memento;

readonly class Memento
{
    public function __construct(private State $state)
    {
    }

    public function getState(): State
    {
        return $this->state;
    }
}