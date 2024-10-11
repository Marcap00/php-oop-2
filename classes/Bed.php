<?php
require_once __DIR__ . '/../requires/requires.php';
class Bed extends Product
{
    private string $color;
    private string $size;
    private string $comfortLevel;

    public function __construct(string $name, float $price, string $description, string $image, Category $category, string $color, string $size, string $comfortLevel)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->color = $color;
        $this->size = $size;
        $this->comfortLevel = $comfortLevel;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getComfortLevel(): string
    {
        return $this->comfortLevel;
    }
}
