<?php
require_once __DIR__ . '/Category.php';
class Product
{
    public string $name;
    public float $price;
    public string $description;
    public string $image;
    public Category $category;

    public function __construct(string $name, float $price, string $description, string $image, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
    }
}