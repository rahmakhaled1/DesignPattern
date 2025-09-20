<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BENZCarBuilder implements CarInterfaceBuilder
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
        $this->carType = new BenzCar();
    }

    /**
    * @return void
    **/
    public function addBody(): void
    {
        $this->carType->setPart('body', 'Benz Body');
    }
    
    /**
    * @return void
    **/
    public function addDoors(): void
    {
        $this->carType->setPart('doors', 'Benz Doors');
    }

    /**
    * @return void
    **/
    public function addWheels(): void
    {
        $this->carType->setPart('wheels', 'Benz Wheels');
    }

    /**
    * @return void
    **/
    public function addEngine(): void
    {
        $this->carType->setPart('engine', 'Benz Engine');
    }
    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->carType;
    }
}
