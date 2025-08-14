<?php

namespace SOLID\LSP\Course;

class AttackerPlayer implements Player
{
    public function play(): void
    {
        echo "Attack... ";
    }
}