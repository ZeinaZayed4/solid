<?php

namespace SOLID\LSP;

class LSPViolation
{
    public function calculateSalaryOfEmployee(LSPViolationType $type, int $tax): float|int
    {
        return $type->calculateSalary($tax);
    }
}