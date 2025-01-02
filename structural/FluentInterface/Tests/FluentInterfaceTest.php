<?php

declare(strict_types=1);

namespace Structural\FluentInterface\Tests;

use PHPUnit\Framework\TestCase;
use Structural\FluentInterface\Sql;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL(): void
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}