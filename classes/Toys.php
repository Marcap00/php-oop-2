<?php
require_once __DIR__ . '/Product.php';

class Toys extends Product
{
    private string $resistance;
    private string $material;
    private string $trainingLevel;

    public function __construct(string $name, float $price, string $description, string $image, Category $category, string $resistance, string $material, string $trainingLevel)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->resistance = $resistance;
        $this->material = $material;
        $this->trainingLevel = $trainingLevel;
    }

    public function getResistance(): string
    {
        return $this->resistance;
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function getTrainingLevel(): string
    {
        return $this->trainingLevel;
    }
}
