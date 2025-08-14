<?php

namespace SOLID\LSP\Course;

use SOLID\LSP\Course\Players\ElhadaryChild;
use SOLID\LSP\Course\Players\ElhadaryFather;

class KeeperPlayer implements Player
{
    public function play(): void
    {
        // $keeper = new ElhadaryFather();
        $keeper = new ElhadaryChild();
        echo $keeper->keeping();
    }
}