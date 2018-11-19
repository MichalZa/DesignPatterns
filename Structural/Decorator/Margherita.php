<?php

namespace Structural\Decorator;

class Margherita implements PizzaInterface
{
    public function makePizza()
    {
        return 'basic ingredients';
    }
}