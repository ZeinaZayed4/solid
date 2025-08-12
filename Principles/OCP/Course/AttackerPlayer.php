<?php

namespace SOLID\OCP\Course;

class AttackerPlayer implements Player
{
    public function play(): void
    {
        echo "Attack... ";
    }
}