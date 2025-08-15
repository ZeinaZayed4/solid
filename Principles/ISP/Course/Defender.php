<?php

namespace SOLID\ISP\Course;

class Defender implements DefendInterface
{
    public function defend(): void
    {
        echo 'Defend... ';
    }
}