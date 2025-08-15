<?php

namespace SOLID\ISP\Course;

class Game
{
    private array $defenders;
    private array $attackers;
    private Keeper $keeper;

    public function __construct(array $defenders, array $attackers, Keeper $keeper)
    {
        $this->defenders = $defenders;
        $this->attackers = $attackers;
        $this->keeper = $keeper;
    }

    public function start(): void
    {
        echo "Start the game...<br />";

        foreach ($this->defenders as $defender) {
            $defender->defend();
        }

        foreach ($this->attackers as $attacker) {
            $attacker->attack();
        }

        $this->keeper->keep();
    }
}