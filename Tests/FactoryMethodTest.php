<?php

namespace Tests;

use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BENZBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;


class FactoryMethodTest extends TestCase
{


    /**
     * Tests that the createBMWCar method of the BMWBrandFactory class
     * returns an instance of the BMWBrand class.
     */
    public function testCaseCreateBMWCar()
    {
        $carFactory = new BMWBrandFactory();
        $myCar = $carFactory->BuildBrand();
        $this->assertInstanceOf(BMWBrand::class, $myCar);
    }

    /**
     * Tests that the createBenzCar method of the BENZBrandFactory class
     * returns an instance of the BENZBrand class.
     */
    public function testCaseCreateBenzCar()
    {
        $carFactory = new BENZBrandFactory();
        $myCar = $carFactory->BuildBrand();
        $this->assertInstanceOf(BENZBrand::class, $myCar);
    }    
}