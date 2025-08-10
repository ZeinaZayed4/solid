<?php

namespace SOLID\ISP;

class Bus implements Vehicle
{

    public function move(): void
    {
        echo 'I am moving';
    }

    public function stop(): void
    {
        echo 'Stopping...';
    }
}