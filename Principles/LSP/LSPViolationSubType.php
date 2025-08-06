<?php

namespace SOLID\LSP;

class LSPViolationSubType extends LSPViolationType
{
    public function calculateSalary(int $tax): float|int
    {
        // precondition
        if ($tax <= 15) {
            echo "Sorry, tax must be more than 15%";
        }
        return $this->getSalary() - ($this->getSalary() * ($tax + 2) / 100);
    }
}