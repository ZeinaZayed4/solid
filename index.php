<?php

use SOLID\ISP\Course\Attacker;
use SOLID\ISP\Course\Defender;
use SOLID\ISP\Course\Game;
use SOLID\ISP\Course\Keeper;

require_once __DIR__ . '/vendor/autoload.php';

$defenders = [];
$attackers = [];

for ($i = 1; $i <= 5; ++$i) {
    $defenders[$i] = new Defender();
}

for ($i = 6; $i <= 10; ++$i) {
    $attackers[$i] = new Attacker();
}

$keeper = new Keeper();

$game = new Game($defenders, $attackers, $keeper);
$game->start();
