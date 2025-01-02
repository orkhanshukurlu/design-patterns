<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

class RecordingVisitor implements RoleVisitor
{
    private array $visited = [];

    public function visitGroup(Group $role): void
    {
        $this->visited[] = $role;
    }

    public function visitUser(User $role): void
    {
        $this->visited[] = $role;
    }

    public function getVisited(): array
    {
        return $this->visited;
    }
}