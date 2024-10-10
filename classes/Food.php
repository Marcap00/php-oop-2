<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public string $expirationDate;
    public float $energyValue;


    public function __construct(string $name, float $price, string $description, string $image, Category $category, string $expirationDate, float $energyValue)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->expirationDate = $expirationDate;
        $this->energyValue = $energyValue;
    }
}