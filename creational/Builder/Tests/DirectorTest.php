<?php

declare(strict_types=1);

namespace Creational\Builder\Tests;

use Creational\Builder\CarBuilder;
use Creational\Builder\Director;
use Creational\Builder\Parts\Car;
use Creational\Builder\Parts\Truck;
use Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck(): void
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar(): void
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}