<?php

namespace SOLID\DIP\Course;

class Defender implements PlayerInterface, DefendInterface
{
    public function defend(): void
    {
        echo 'Defend... ';
    }

    public function play(): void
    {
        $this->defend();
    }
}