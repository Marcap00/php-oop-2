<?php
require_once __DIR__ . '/Category.php';
class Product
{
    private string $name;
    private float $price;
    private string $description;
    private string $image;
    private Category $category;

    public function __construct(string $name, float $price, string $description, string $image, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function getCategory(): Category
    {
        return $this->category;
    }
}
