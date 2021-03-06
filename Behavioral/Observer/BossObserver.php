<?php

namespace Behavioral\Observer;

class BossObserver
{
    public function update()
    {
        echo 'get your shit together and do your job!';
    }
}

/* use case */

$worker =  new Worker();
$bossObserver = new BossObserver();

$worker->attach($bossObserver);
$worker->loungeAround(); // boss starts screaming

$worker->detach($bossObserver);
$worker->loungeAround(); // no one screaming

