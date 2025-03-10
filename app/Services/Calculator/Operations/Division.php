<?php

namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\Operation;

class Division implements Operation 
{
    public function calculate(float $number1, float $number2): float 
    {
        if ($number2 == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }

        return $number1 / $number2;
    }
}