<?php

namespace App\Services;

interface OperationInterface
{
    public function calculate(float $number_1, float $number_2): float;
}
