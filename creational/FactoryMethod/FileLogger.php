<?php

declare(strict_types=1);

namespace Creational\FactoryMethod;

readonly class FileLogger implements Logger
{
    public function __construct(private string $filePath)
    {
    }

    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}