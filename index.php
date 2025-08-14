<?php

use SOLID\LSP\Course\AttackerPlayer;
use SOLID\LSP\Course\DefenderPlayer;
use SOLID\LSP\Course\Game;
use SOLID\LSP\Course\KeeperPlayer;

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
