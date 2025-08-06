<?php

namespace SOLID\LSP;

class EncrypterSubType extends Encrypter
{
    public function encryptString(): string
    {
        return sha1($this->getString());
    }
}