<?php

namespace App\Services\Calculator;

use App\Services\Calculator\Enums\Operator;
use App\Services\Calculator\Operations\Addition;
use App\Services\Calculator\Operations\Division;
use App\Services\Calculator\Operations\Multiplication;
use App\Services\Calculator\Operations\Subtraction;

class CalculatorService 
{
    protected array $operations = [];

    public function __construct()
    {
        $this->operations = [
            Operator::ADDITION->value => new Addition,
            Operator::SUBTRACTION->value => new Subtraction,
            Operator::MULTIPLICATION->value => new Multiplication,
            Operator::DIVISION->value => new Division,
        ];
    }

    public function calculate(Operator $operator, float $number1, float $number2): float 
    {
        if (!isset($this->operations[$operator->value])) {
            throw new \InvalidArgumentException('Unsupported operation.');
        }

        return $this->operations[$operator->value]->calculate($number1, $number2);
    }
}
