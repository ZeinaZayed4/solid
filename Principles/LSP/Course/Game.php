<?php

namespace SOLID\LSP\Course;

class Game
{
    private array $players;
    public function __construct(array $players)
    {
        $this->players = $players;
    }

    public function start(): void
    {
        echo "Start the game...<br />";

        foreach ($this->players as $player) {
            $player->play();
        }
    }
}