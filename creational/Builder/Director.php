<?php

declare(strict_types=1);

namespace Creational\Builder;

use Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}