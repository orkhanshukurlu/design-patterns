<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

class VariableExp extends AbstractExp
{
    public function __construct(private readonly string $name)
    {
    }

    public function interpret(Context $context): bool
    {
        return $context->lookUp($this->name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}