<?php

namespace Creational\FactoryMethod;

class BENZBrand implements CarBrandInterface
{

    public function createBrand(): string
    {
        return "BENZ";
    }
}
