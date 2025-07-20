<?php

namespace SOLID\SRP;

class Bus
{
    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maximumSpeed;
    private int $doors;

    private Driver $driver;

    private array $routes = [];

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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed . ' K/h';
    }

    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    public function doMaintenance(): string
    {
        return 'The bus is doing maintenance right now.';
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function move(): string
    {
        $output = '';
        foreach ($this->getRoutes() as $route) {
            $output .= "<p>This bus is moving from {$route->getSource()} 
                        to {$route->getDestination()} at a maximum speed of 
                        {$this->getMaximumSpeed()}.
                        The driver is: {$this->getDriver()->getName()}.</p>";
        }
        return $output;
    }
}
