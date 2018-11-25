<?php

namespace Structural\Facade;

class Facade
{
    /**
     * @var BrainInterface
     */
    private $brain;
    /**
     * @var HandsInterface
     */
    private $hands;

    public function __construct(BrainInterface $brain, HandsInterface $hands)
    {
        $this->brain = $brain;
        $this->hands = $hands;
    }

    /**
     * coding...
     */
    public function develop()
    {
        $this->brain->thinking();
        $this->hands->typing();
    }
}