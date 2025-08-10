<?php

namespace SOLID\ISP;

class Car implements Vehicle, Speed, Entertainment
{

    public function move(): void
    {
        echo 'I am moving';
    }

    public function stop(): void
    {
        echo 'Stopping...';
    }

    public function accelerate(): void
    {
        echo 'I can accelerate up to 200 Km/h';
    }

    public function musicPlay(): void
    {
        echo 'Playing your favorite music';
    }

    public function pause(): void
    {
        echo 'Pausing current track';
    }

    public function rewind(): void
    {
        echo 'I will rewind the tape';
    }
}