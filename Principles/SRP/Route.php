<?php

namespace SOLID\SRP;

class Route
{
    private string $source;
    private string $destination;
    private int $distance;

    public function __construct(string $source, string $destination, int $distance)
    {
        $this->setSource($source);
        $this->setDestination($destination);
        $this->setDistance($distance);
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }
}
