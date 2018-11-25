<?php

namespace Creational\Builder;

class Beer {

    /**
     * @var string $name
     */
    private $name;
    /**
     * @var float $power
     */
    private $power;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Beer
     */
    public function setName(string $name): Beer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPower(): float
    {
        return $this->power;
    }

    /**
     * @param float $power
     * @return Beer
     */
    public function setPower(float $power): Beer
    {
        $this->power = $power;
        return $this;
    }

    public function __toString()
    {
        return $this->name . ' : ' . $this->power;
    }
}