<?php

namespace App\Services;

use App\Services\Operations\Addition;
use App\Services\Operations\Division;
use App\Services\Operations\Multiplication;
use App\Services\Operations\Subtraction;

class CalculatorService {
    protected array $operations = [];

    public function __construct() {
        $this->operations = [
            'add'      => new Addition(),
            'subtract' => new Subtraction(),
            'multiply' => new Multiplication(),
            'divide'   => new Division(),
        ];
    }

    public function calculate(string $operation, float $number_1, float $number_2): float {
        if (!isset($this->operations[$operation])) {
            throw new \InvalidArgumentException("Error: Unsupported operation.");
        }
        return $this->operations[$operation]->calculate($number_1, $number_2);
    }
}
