<?php
require_once __DIR__ . '/Product.php';

class Toys extends Product
{
    public string $resistance;
    public string $material;
    public string $trainingLevel;

    public function __construct(string $name, float $price, string $description, string $image, Category $category, string $resistance, string $material, string $trainingLevel)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->resistance = $resistance;
        $this->material = $material;
        $this->trainingLevel = $trainingLevel;
    }
}