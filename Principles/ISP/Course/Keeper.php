<?php

namespace SOLID\ISP\Course;

class Keeper implements KeepInterface
{
    public function keep(): void
    {
        echo "Keep the goal clean... ";
    }
}