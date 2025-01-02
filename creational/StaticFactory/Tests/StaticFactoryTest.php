<?php

declare(strict_types=1);

namespace Creational\StaticFactory\Tests;

use Creational\StaticFactory\FormatNumber;
use Creational\StaticFactory\FormatString;
use Creational\StaticFactory\StaticFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter(): void
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter(): void
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}