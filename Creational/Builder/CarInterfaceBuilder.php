<?php

namespace Creational\Builder;
use Creational\Builder\Models\Car;

interface CarInterfaceBuilder
{
    public function createCar(): void;

    public function addBody(): void;

    public function addDoors(): void;

    public function addWheels(): void;

    public function addEngine(): void;

    public function getCar(): Car;
}