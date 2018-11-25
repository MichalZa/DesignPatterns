<?php

namespace Creational\Builder;

class TyskieBuilder implements BuilderInterface {

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
        $this->beer->setName('Tyskie')->setPower('5.7');
    }

    public function getBeer(): Beer
    {
        return $this->beer;
    }
}