<?php

namespace Creational\Factory;

class Factory
{
    public function create($type)
    {
        $typeClass = __NAMESPACE__ . "\\$type";
        if (!class_alias($typeClass)) {
            throw new \Exception("$typeClass does not exist!");
        }
        if (!in_array(CarInterface::class, class_implements($typeClass))) {
            throw new \Exception("$typeClass has incorrect type");
        }

        return new $typeClass;
    }
}

/* use case */

$factory = new Factory();
$bmw = $factory->create('BMW');
$bmw->produce(); // producing BMW

$audi = $factory->create('Audi');
$audi->produce(); // producing Audi