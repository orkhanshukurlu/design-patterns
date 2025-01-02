<?php

declare(strict_types=1);

namespace Creational\StaticFactory;

interface Formatter
{
    public function format(string $input): string;
}