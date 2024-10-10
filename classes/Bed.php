<?php
require_once __DIR__ . '/Product.php';

class Bed extends Product
{
    public string $color;
    public string $size;
    public string $comfortLevel;

    public function __construct(string $name, float $price, string $description, string $image, Category $category, string $color, string $size, string $comfortLevel)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->color = $color;
        $this->size = $size;
        $this->comfortLevel = $comfortLevel;
    }
}