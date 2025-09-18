<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterface;

class BenzCar implements CarInterface
{

    public function __construct(private int $price, private int $tax) {}
 
    /**
     * Calculate the price of a car, including a 10,000 tax.
     *
     * @return int The price of the car
     */
    public function calculatePrice(): int
    {
        return $this->price + $this->tax + 10000;
    }
}