<?php

namespace SOLID\LSP;

class Encrypter
{
    protected string $string;

    public function getString(): string
    {
        return $this->string;
    }

    public function setString(string $string): void
    {
        $this->string = $string;
    }

    public function encryptString(): string
    {
        return md5($this->getString());
    }
}