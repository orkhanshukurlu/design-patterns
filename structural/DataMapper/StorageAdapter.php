<?php

declare(strict_types=1);

namespace Structural\DataMapper;

readonly class StorageAdapter
{
    public function __construct(private array $data)
    {
    }

    public function find(int $id): ?array
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}