<?php

declare(strict_types=1);

namespace Structural\DependencyInjection;

readonly class DatabaseConnection
{
    public function __construct(private DatabaseConfiguration $configuration)
    {
    }

    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}