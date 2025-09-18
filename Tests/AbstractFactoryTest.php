<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\CarAbstractFactory;

class AbstractFactoryTest extends TestCase
{

    /**
     * Tests that the createBMWCar method of the CarAbstractFactory class
     * returns an instance of the BMWCar class.
     */
    public function testCaseCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(100000);
        $myCar = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    /**
     * Tests that the createBenzCar method of the CarAbstractFactory class
     * returns an instance of the BenzCar class.
     */
    public function testCaseCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(10000000);
        $myCar = $carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }    
}