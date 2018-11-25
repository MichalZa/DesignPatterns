<?php

namespace Creational\Builder;

class Director {

    public function build(BuilderInterface $builder) : Beer
    {
        $builder->buildBeer();

        return $builder->getBeer();
    }
}


/* use case */

$director = new Director();
$tyskie = $director->build(new TyskieBuilder());
echo $tyskie; // Tyskie : 5.7

$porter = $director->build(new PorterBuilder());
echo $porter; // Zywiec porter : 11.7