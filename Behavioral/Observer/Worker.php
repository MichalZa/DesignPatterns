<?php

namespace Behavioral\Observer;

use SplObserver;

class Worker implements \SplSubject
{
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function loungeAround()
    {
        // do nothing at work and get relax
        $this->notify();
    }
}