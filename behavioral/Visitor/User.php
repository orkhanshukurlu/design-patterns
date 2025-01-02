<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

readonly class User implements Role
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return sprintf('User %s', $this->name);
    }

    public function accept(RoleVisitor $visitor): void
    {
        $visitor->visitUser($this);
    }
}