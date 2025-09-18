<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterface;

class BMWCar implements CarInterface
{

     public function __construct(private int $price) {}
 
    /**
     * Calculate the price of a BMW car, including a 10,000 tax.
     *
     * @return int The price of the car
     */
    public function calculatePrice(): int
    {
        return $this->price + 10000;
    }
}