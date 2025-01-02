<?php

declare(strict_types=1);

namespace Creational\StaticFactory;

use InvalidArgumentException;

final class StaticFactory
{
    public static function factory(string $type): Formatter
    {
        return match ($type) {
            'number' => new FormatNumber(),
            'string' => new FormatString(),
            default => throw new InvalidArgumentException('Unknown format given'),
        };
    }
}