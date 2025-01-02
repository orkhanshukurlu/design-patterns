<?php

declare(strict_types=1);

namespace Structural\Registry;

use InvalidArgumentException;

abstract class Registry
{
    public const string LOGGER = 'logger';

    private static array $services = [];

    private static array $allowedKeys = [
        self::LOGGER,
    ];

    final public static function set(string $key, Service $value): void
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('Invalid key given');
        }

        self::$services[$key] = $value;
    }

    final public static function get(string $key): Service
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$services[$key])) {
            throw new InvalidArgumentException('Invalid key given');
        }

        return self::$services[$key];
    }
}