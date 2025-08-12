<?php

namespace SOLID\OCP\Course;

class DefenderPlayer implements Player
{
    public function play(): void
    {
        echo 'Defend... ';
    }
}