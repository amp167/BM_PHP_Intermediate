<?php

class Car
{
    public $brand, $modal, $price, $available;

    public function __construct(string $brand, int $modal, float $price, bool $available)
    {
        $this->brand = $brand;
        $this->modal = $modal;
        $this->price = $price;
        $this->available = $available;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModal(): int
    {
        return $this->modal;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

}

class Driver
{
    public $name, $age, $family, $hourlyRate, $martialStatus;


    public function getName(): string
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getFamily(): array
    {
        return $this->family;
    }

    public function setFamily($family)
    {
        $this->family = $family;
    }

    public function getHourlyRate(): float
    {
        return $this->hourlyRate;
    }

    public function setHourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }

    public function getMartialStatus(): bool
    {
        return $this->martialStatus;
    }

    public function setMartialStatus($martialStatus)
    {
        $this->martialStatus = $martialStatus;
    }

}
