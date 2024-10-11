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

    public function setColor(string $color): void
    {
        if (mb_strlen($color)) {
            $this->color = $color;
        } else {
            throw new Exception('Color too short');
        }
    }

    public function setSize(string $size): void
    {
        if (mb_strlen($size)) {
            $this->size = $size;
        } else {
            throw new Exception('Size too short');
        }
    }

    public function setComfortLevel(string $comfortLevel): void
    {
        if (mb_strlen($comfortLevel)) {
            $this->comfortLevel = $comfortLevel;
        } else {
            throw new Exception('Comfort level too short');
        }
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
