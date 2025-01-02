<?php

declare(strict_types=1);

namespace Structural\Facade\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Facade\Bios;
use Structural\Facade\Facade;
use Structural\Facade\OperatingSystem;

class FacadeTest extends TestCase
{
    public function testComputerOn(): void
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}