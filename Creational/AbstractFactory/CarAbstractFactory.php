<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;

class CarAbstractFactory
{
    public function __construct(private int $price, private int $tax = 10000) {}
    /**
     * Create a BMW car instance.
     *
     * @return BMWCar The BMW car instance.
     */
    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }

    /**
     * Create a Benz car instance.
     *
     * @return BenzCar The Benz car instance.
     */
    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}