<?php
trait Code
{
    private string|int $code;

    public function setCode(string|int $code): void
    {
        $this->code = $code;
    }

    public function getCode(): string|int
    {
        return $this->code;
    }
}
