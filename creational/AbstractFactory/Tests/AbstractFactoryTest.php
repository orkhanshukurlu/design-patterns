<?php

declare(strict_types=1);

namespace Creational\AbstractFactory\Tests;

use Creational\AbstractFactory\CsvWriter;
use Creational\AbstractFactory\JsonWriter;
use Creational\AbstractFactory\UnixWriterFactory;
use Creational\AbstractFactory\WinWriterFactory;
use Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public static function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()],
        ];
    }

    #[DataProvider('provideFactory')]
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory): void
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}