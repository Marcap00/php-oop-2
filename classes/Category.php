<?php
require_once __DIR__ . '/../requires/requires.php';

class Category
{
    private string $name;
    use Code;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function setName(string $name): void
    {
        if (mb_strlen($name)) {
            $this->name = $name;
        } else {
            throw new Exception('Category name too short');
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
}
