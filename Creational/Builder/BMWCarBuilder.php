<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarInterfaceBuilder
{
    /**
     * @var Car
     */
    private $carType;
    
    /**
     * @return void
    **/
    public function createCar(): void
    {
        $this->carType = new BMWCar();
    }

    /**
    * @return void
    **/
    public function addBody(): void
    {
        $this->carType->setPart('body', 'BMW Body');
    }
    
    /**
    * @return void
    **/
    public function addDoors(): void
    {
        $this->carType->setPart('doors', 'BMW Doors');
    }

    /**
    * @return void
    **/
    public function addWheels(): void
    {
        $this->carType->setPart('wheels', 'BMW Wheels');
    }

    /**
    * @return void
    **/
    public function addEngine(): void
    {
        $this->carType->setPart('engine', 'BMW Engine');
    }
    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->carType;
    }
}
