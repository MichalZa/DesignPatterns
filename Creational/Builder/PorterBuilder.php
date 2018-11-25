<?php

namespace Creational\Builder;

class PorterBuilder implements BuilderInterface {

    /**
     * @var $beer Beer
     */
    private $beer;

    public function __construct()
    {
        $this->beer = new Beer();
    }

    public function buildBeer()
    {
        $this->beer->setName('Zywiec Porter')->setPower('11.7');
    }

    public function getBeer(): Beer
    {
        return $this->beer;
    }
}