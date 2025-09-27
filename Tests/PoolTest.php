<?php

namespace Creational\Pool;
use PHPUnit\Framework\TestCase;


class PoolTest extends TestCase
{

    /**
     * Test that the pool returns different objects when asked to get a car.
     * When asked to release a car and get a car again, the pool should return the same object.
     */
    public function testPool()
    {
        $pool = new CarPool(2);

        $obj1 = $pool->getCar();
        $obj2 = $pool->getCar();

        $this->assertNotSame($obj1, $obj2);

        $pool->releaseCar($obj1);
        $obj3 = $pool->getCar();

        $this->assertSame($obj1, $obj3);
    }
}