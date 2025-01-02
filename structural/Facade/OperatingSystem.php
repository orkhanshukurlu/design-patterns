<?php

declare(strict_types=1);

namespace Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}