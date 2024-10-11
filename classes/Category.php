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
    public function getName(): string
    {
        return $this->name;
    }
}
