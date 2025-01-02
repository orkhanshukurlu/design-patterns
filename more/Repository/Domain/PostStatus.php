<?php

declare(strict_types=1);

namespace More\Repository\Domain;

use InvalidArgumentException;

class PostStatus
{
    public const int STATE_DRAFT_ID = 1;

    public const int STATE_PUBLISHED_ID = 2;

    public const string STATE_DRAFT = 'draft';

    public const string STATE_PUBLISHED = 'published';

    private static array $validStates = [
        self::STATE_DRAFT_ID => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED,
    ];

    public static function fromInt(int $statusId): PostStatus
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status): PostStatus
    {
        self::ensureIsValidName($status);
        $state = array_search($status, self::$validStates);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state given!');
        }

        return new self($state, $status);
    }

    private function __construct(private readonly int $id, private readonly string $name)
    {
    }

    public function toInt(): int
    {
        return $this->id;
    }

    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidId(int $status): void
    {
        if (!in_array($status, array_keys(self::$validStates), true)) {
            throw new InvalidArgumentException('Invalid status id given');
        }
    }

    private static function ensureIsValidName(string $status): void
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }
}