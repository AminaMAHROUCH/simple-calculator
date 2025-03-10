<?php

namespace App\Services\Calculator\Operations;

use App\Services\Calculator\Contracts\Operation;

class Multiplication implements Operation 
{
    public function calculate(float $number1, float $number2): float 
    {
        return $number1 * $number2;
    }
}