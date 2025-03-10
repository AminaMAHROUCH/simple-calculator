<?php

namespace App\Services\Operations;

use App\Services\OperationInterface;

class Division implements OperationInterface {
    public function calculate(float $number_1, float $number_2): float {
        if ($number_2 == 0) {
            throw new \InvalidArgumentException("Error: Division by zero is not allowed.");
        }
        return $number_1 / $number_2;
    }
}