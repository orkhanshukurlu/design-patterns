<?php

declare(strict_types=1);

namespace Behavioral\NullObject\Tests;

use Behavioral\NullObject\NullLogger;
use Behavioral\NullObject\PrintLogger;
use Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
