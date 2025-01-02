<?php

declare(strict_types=1);

namespace Behavioral\NullObject;

readonly class Service
{
    public function __construct(private Logger $logger)
    {
    }

    public function doSomething(): void
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}