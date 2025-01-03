<?php

declare(strict_types=1);

namespace More\ServiceLocator;

use InvalidArgumentException;

class ServiceLocator
{
    private array $services = [];

    private array $instantiated = [];

    public function addInstance(string $class, Service $service): void
    {
        $this->instantiated[$class] = $service;
    }

    public function addClass(string $class, array $params): void
    {
        $this->services[$class] = $params;
    }

    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $object = new $class(...$this->services[$class]);

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;

        return $object;
    }
}