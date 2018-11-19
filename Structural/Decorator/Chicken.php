<?php

namespace Structural\Decorator;

class Chicken implements PizzaInterface
{
    /**
     * @var PizzaInterface
     */
    private $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }

    public function makePizza()
    {
        return $this->pizza->makePizza() . ' + ham, chicken - more ingredients'; // decorated
    }
}