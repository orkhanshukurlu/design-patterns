<?php

declare(strict_types=1);

namespace Tests\Mediator\Tests;

use Behavioral\Mediator\Ui;
use Behavioral\Mediator\UserRepository;
use Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}
