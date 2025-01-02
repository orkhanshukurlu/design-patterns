<?php

declare(strict_types=1);

namespace Structural\DependencyInjection\Tests;

use PHPUnit\Framework\TestCase;
use Structural\DependencyInjection\DatabaseConfiguration;
use Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'user', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('user:1234@localhost:3306', $connection->getDsn());
    }
}