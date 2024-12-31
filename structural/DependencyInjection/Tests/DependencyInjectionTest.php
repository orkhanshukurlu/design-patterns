<?php

declare(strict_types=1);

namespace Structural\DependencyInjection\Tests;

use Structural\DependencyInjection\DatabaseConfiguration;
use Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'user', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('user:1234@localhost:3306', $connection->getDsn());
    }
}
