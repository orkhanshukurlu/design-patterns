<?php

declare(strict_types=1);

namespace Structural\DataMapper\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Structural\DataMapper\StorageAdapter;
use Structural\DataMapper\User;
use Structural\DataMapper\UserMapper;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage(): void
    {
        $storage = new StorageAdapter([1 => ['username' => 'someone', 'email' => 'someone@example.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}