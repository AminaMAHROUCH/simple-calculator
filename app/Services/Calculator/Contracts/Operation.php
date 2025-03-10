<?php

namespace App\Services\Calculator\Contracts;

interface Operation
{
    public function calculate(float $number1, float $number2): float;
}
