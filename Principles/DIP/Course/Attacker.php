<?php

namespace SOLID\DIP\Course;

class Attacker implements PlayerInterface, AttackInterface
{
    public function attack(): void
    {
        echo "Attack... ";
    }

    public function play(): void
    {
        $this->attack();
    }
}