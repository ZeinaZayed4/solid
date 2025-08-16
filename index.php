<?php

use SOLID\DIP\Course\Attacker;
use SOLID\DIP\Course\Defender;
use SOLID\DIP\Course\Game;
use SOLID\DIP\Course\Keeper;

require_once __DIR__ . '/vendor/autoload.php';

$players = [];

for ($i = 1; $i <= 5; ++$i) {
    $players[$i] = new Defender();
}

for ($i = 6; $i <= 10; ++$i) {
    $players[$i] = new Attacker();
}

$players[] = new Keeper();

$game = new Game($players);
$game->start();
