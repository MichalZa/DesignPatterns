<?php

namespace Creational\Builder;

interface BuilderInterface {

    public function buildBeer();

    public function getBeer() : Beer;

}