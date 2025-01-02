<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

class OrExp extends AbstractExp
{
    public function __construct(private readonly AbstractExp $first, private readonly AbstractExp $second)
    {
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}