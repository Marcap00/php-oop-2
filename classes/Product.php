<?php
require_once __DIR__ . '/../requires/requires.php';
class Product
{
    private string $name;
    private float $price;
    private string $description;
    private string $image;
    private Category $category;
    use Code;

    public function __construct(string $name, float $price, string $description, string $image, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
    }

    public function setName(string $name): void
    {
        if (mb_strlen($name)) {
            $this->name = $name;
        } else {
            throw new Exception('Product name too short');
        }
    }
    public function setPrice(float $price): void
    {
        if ($price > 0) {
            $this->price = $price;
        } else {
            throw new Exception('Product price too low');
        }
    }
    public function setDescription(string $description): void
    {
        if (mb_strlen($description) > 10) {
            $this->description = $description;
        } else {
            throw new Exception('Product description too short');
        }
    }
    public function setImage(string $image): void
    {
        if (mb_strlen($image)) {
            $this->image = $image;
        } else {
            throw new Exception('Product image too short');
        }
    }
    public function setCategory(Category $category): void
    {
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
