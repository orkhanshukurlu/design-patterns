<?php

declare(strict_types=1);

namespace Structural\Bridge;

abstract class Service
{
    public function __construct(protected Formatter $implementation)
    {
    }

    final public function setImplementation(Formatter $printer): void
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}