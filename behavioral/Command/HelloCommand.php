<?php

declare(strict_types=1);

namespace Behavioral\Command;

readonly class HelloCommand implements Command
{
    public function __construct(private Receiver $output)
    {
    }

    public function execute(): void
    {
        $this->output->write('Hello World');
    }
}