<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

readonly class Group implements Role
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return sprintf('Group: %s', $this->name);
    }

    public function accept(RoleVisitor $visitor): void
    {
        $visitor->visitGroup($this);
    }
}