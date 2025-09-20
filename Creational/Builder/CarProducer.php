<?php

namespace Creational\Builder;


use Creational\Builder\CarInterfaceBuilder;
use Creational\Builder\Models\Car;

class CarProducer
{

    public function __construct(private CarInterfaceBuilder $builder){}

    /**
     * Builds a car using the builder.
     *
     * This method creates a car using the builder and adds the body, doors, wheels and engine.
     * It then returns the built car.
     *
     * @return \Creational\Builder\Models\Car The built car instance.
     */
    public function build(): Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addWheels();
        $this->builder->addEngine();
        
        return $this->builder->getCar();
    }
}