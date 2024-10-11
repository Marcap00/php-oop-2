<?php
require_once __DIR__ . '/../requires/requires.php';

class Food extends Product
{
    private string $expirationDate;
    private float $energyValue;


    public function __construct(string $name, float $price, string $description, string $image, Category $category, string $expirationDate, float $energyValue)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->expirationDate = $expirationDate;
        $this->energyValue = $energyValue;
    }


    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    public function getEnergyValue(): float
    {
        return $this->energyValue;
    }
}
