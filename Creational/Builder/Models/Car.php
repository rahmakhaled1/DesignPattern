<?php

namespace Creational\Builder\Models;

class Car
{
    private $data = [];
    /**
     * Set a part of the car.
     *
     * @param string $name The name of the part.
     * @param mixed $value The value of the part.
     *
     * @return void
     */
    public function setPart($name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Get a part of the car.
     *
     * @param string $name The name of the part.
     *
     * @return mixed The value of the part, or null if it does not exist.
     */
    public function getPart($name): mixed
    {

        return $this->data[$name] ?? null;
    }  
}