<?php

namespace SOLID\OCP;

class Trip
{
    private IVehicle $vehicle;
    private string $tripNumber;
    private float $tripPrice;
    private int $durationInMinutes;

    public function __construct(IVehicle $vehicle, string $tripNumber, float $tripPrice, int $durationInMinutes)
    {
        $this->setVehicle($vehicle);
        $this->setTripNumber($tripNumber);
        $this->setTripPrice($tripPrice);
        $this->setDurationInMinutes($durationInMinutes);
    }

    public function getVehicle(): IVehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(IVehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    public function getDurationInMinutes(): int
    {
        return $this->durationInMinutes;
    }

    public function setDurationInMinutes(int $durationInMinutes): void
    {
        $this->durationInMinutes = $durationInMinutes;
    }

    public function move(): string
    {
        return $this->vehicle->move();
    }
}