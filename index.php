<?php

use SOLID\OCP\Course\AttackerPlayer;
use SOLID\OCP\Course\DefenderPlayer;
use SOLID\OCP\Course\Game;
use SOLID\OCP\Course\KeeperPlayer;

require_once __DIR__ . '/vendor/autoload.php';

$players = [];

for ($i = 1; $i <= 5; ++$i) {
    $players[$i] = new DefenderPlayer();
}

for ($i = 6; $i <= 10; ++$i) {
    $players[$i] = new AttackerPlayer();
}

$players[] = new KeeperPlayer();

$game = new Game($players);
$game->start();
