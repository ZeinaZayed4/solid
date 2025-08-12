<?php

namespace SOLID\OCP\Course;

class KeeperPlayer implements Player
{
    public function play(): void
    {
        echo 'Keep the goal clean... ';
    }
}