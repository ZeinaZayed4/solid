<?php

namespace SOLID\OCP;

abstract class Vehicle implements IVehicle
{
    private IMove $moveable;
    private string $color;
    private int $maximumSpeed;
    private Driver $driver;
    private array $routes = [];

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

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function getMoveable(): IMove
    {
        return $this->moveable;
    }

    public function setMoveable(IMove $moveable): void
    {
        $this->moveable = $moveable;
    }

    public function move(): string
    {
        return $this->getMoveable()->move();
    }
}