<?php

namespace SOLID\ISP\Course;

class Attacker implements AttackInterface
{
    public function attack(): void
    {
        echo "Attack... ";
    }
}