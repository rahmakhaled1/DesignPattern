<?php

namespace Creational\Builder\Models;

use PHPUnit\Framework\TestCase;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\BENZCarBuilder;
use Creational\Builder\CarProducer;
class BuilderTest extends TestCase
{
    public function testProducerBMWCar()
    {
        $builder = new BMWCarBuilder();
        $producer = new CarProducer($builder);
        $myCar = $producer->ProduceCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
        
        $this->assertEquals('BMW Body', $myCar->getPart('body'));
        $this->assertEquals('BMW Doors', $myCar->getPart('doors'));
        $this->assertEquals('BMW Wheels', $myCar->getPart('wheels'));
        $this->assertEquals('BMW Engine', $myCar->getPart('engine'));
    }


    public function testProducerBENZCar()
    {
        $builder = new BENZCarBuilder();
        $producer = new CarProducer($builder);
        $myCar = $producer->ProduceCar();
        $this->assertInstanceOf(BENZCar::class, $myCar);
        
        $this->assertEquals('Benz Body', $myCar->getPart('body'));
        $this->assertEquals('Benz Doors', $myCar->getPart('doors'));
        $this->assertEquals('Benz Wheels', $myCar->getPart('wheels'));
        $this->assertEquals('Benz Engine', $myCar->getPart('engine'));
    }

}