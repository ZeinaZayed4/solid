<?php

namespace SOLID\OCP;

class Bus extends Vehicle
{
    private int $busNumber;
    private int $numberOfPassengers;
    private int $doors;

    public function __construct(int $busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }
}
