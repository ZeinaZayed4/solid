<?php

namespace SOLID\DIP\Course;

class Keeper implements PlayerInterface, KeepInterface
{
    public function keep(): void
    {
        echo "Keep the goal clean... ";
    }

    public function play(): void
    {
        $this->keep();
    }
}