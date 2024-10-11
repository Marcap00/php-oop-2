<?php
require_once __DIR__ . '/../traits/Code.php';

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
