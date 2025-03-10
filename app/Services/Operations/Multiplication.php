<?php

namespace App\Services\Operations;

use App\Services\OperationInterface;

class Multiplication implements OperationInterface {
    public function calculate(float $number_1, float $number_2): float {
        return $number_1 * $number_2;
    }
}