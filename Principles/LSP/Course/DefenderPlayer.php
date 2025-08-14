<?php

namespace SOLID\LSP\Course;

class DefenderPlayer implements Player
{
    public function play(): void
    {
        echo 'Defend... ';
    }
}