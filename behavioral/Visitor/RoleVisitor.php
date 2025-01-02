<?php

declare(strict_types=1);

namespace Behavioral\Visitor;

interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}