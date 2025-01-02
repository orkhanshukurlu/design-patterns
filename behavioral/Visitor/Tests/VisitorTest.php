<?php

declare(strict_types=1);

namespace Behavioral\Visitor\Tests;

use Behavioral\Visitor\Group;
use Behavioral\Visitor\RecordingVisitor;
use Behavioral\Visitor\Role;
use Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles(): array
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    public function testVisitSomeRole(Role $role): void
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}