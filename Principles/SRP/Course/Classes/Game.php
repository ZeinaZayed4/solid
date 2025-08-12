<?php

namespace SOLID\SRP\Course\Classes;

class Game
{
    private Attacker $attacker;
    private Defender $defender;
    private Keeper $keeper;

    public function __construct()
    {
        $this->attacker = new Attacker();
        $this->defender = new Defender();
        $this->keeper = new Keeper();
    }

    public function start(): void
    {
        echo "Game start...";
    }
}