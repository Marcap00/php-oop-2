<?php
require_once __DIR__ . '/../requires/requires.php';

class Toy extends Product
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

    public function setResistance(string $resistance): void
    {
        if (mb_strlen($resistance)) {
            $this->resistance = $resistance;
        } else {
            throw new Exception('Resistance too short');
        }
    }

    public function setMaterial(string $material): void
    {
        if (mb_strlen($material)) {
            $this->material = $material;
        } else {
            throw new Exception('Material too short');
        }
    }

    public function setTrainingLevel(string $trainingLevel): void
    {
        if (mb_strlen($trainingLevel)) {
            $this->trainingLevel = $trainingLevel;
        } else {
            throw new Exception('Training level too short');
        }
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
