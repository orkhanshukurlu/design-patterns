<?php

declare(strict_types=1);

namespace Behavioral\Command\Tests;

use Behavioral\Command\HelloCommand;
use Behavioral\Command\Invoker;
use Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}