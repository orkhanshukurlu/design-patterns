<?php

declare(strict_types=1);

namespace Creational\FactoryMethod\Tests;

use Creational\FactoryMethod\FileLogger;
use Creational\FactoryMethod\FileLoggerFactory;
use Creational\FactoryMethod\StdoutLogger;
use Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging(): void
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging(): void
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}