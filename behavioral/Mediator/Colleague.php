<?php

declare(strict_types=1);

namespace Behavioral\Mediator;

abstract class Colleague
{
    protected Mediator $mediator;

    final public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}