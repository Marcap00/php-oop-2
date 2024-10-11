<?php
trait Code
{
    private string|int $code;

    public function setCode(string|int $code): void
    {
        if (mb_strlen($code)) {
            $this->code = $code;
        } else {
            throw new Exception('Code too short');
        }
        $this->code = $code;
    }

    public function getCode(): string|int
    {
        return $this->code;
    }
}
