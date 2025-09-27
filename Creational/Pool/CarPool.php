<?php

namespace Creational\Pool;

class CarPool
{
    /** 
     * var Car[] 
     * */
    private $availableCars = [];
    /** 
     * var Car[] 
     * */
    private $usedCars = [];

    /**
     * Get a car from the pool.
     *
     * If there are available cars in the pool, it will return one of them.
     * If there are no available cars, it will create a new one.
     *
     * @return Car
     */
    public function getCar(): Car
    {
        if (count($this->availableCars) === 0) {
            $car = new Car();
        } else {
            $car = array_pop($this->availableCars);
        }
        $this->usedCars[spl_object_hash($car)] = $car;
        return $car;
    }

    /**
     * Releases a car back to the pool.
     *
     * If the car is currently in use, it will be added to the available cars array.
     * If the car is not in use, nothing will happen.
     *
     * @param Car $car The car to release.
     */
    public function releaseCar(Car $car): void
    {
        $key = spl_object_hash($car);
        if (isset($this->usedCars[$key])) {
            unset($this->usedCars[$key]);
            $this->availableCars[$key] = $car;
        }
    } 
}
