<?php

declare(strict_types=1);

namespace Behavioral\Command;

interface UndoableCommand extends Command
{
    public function undo();
}