<?php

declare(strict_types=1);

namespace More\Repository\Domain;

use InvalidArgumentException;

readonly class PostId
{
    public static function fromInt(int $id): PostId
    {
        self::ensureIsValid($id);

        return new self($id);
    }

    private function __construct(private int $id)
    {
    }

    public function toInt(): int
    {
        return $this->id;
    }

    private static function ensureIsValid(int $id): void
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('Invalid PostId given');
        }
    }
}