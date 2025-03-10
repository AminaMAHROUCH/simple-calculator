<?php

namespace Tests\Unit;

use App\Services\Calculator\CalculatorService;
use App\Services\Calculator\Enums\Operator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private CalculatorService $calculatorService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculatorService = new CalculatorService();
    }

    public function test_addition()
    {
        $result = $this->calculatorService->calculate(Operator::ADDITION, 5, 3);
        $this->assertEquals(8, $result);
    }

    public function test_subtraction()
    {
        $result = $this->calculatorService->calculate(Operator::SUBTRACTION, 10, 4);
        $this->assertEquals(6, $result);
    }

    public function test_multiplication()
    {
        $result = $this->calculatorService->calculate(Operator::MULTIPLICATION, 3, 4);
        $this->assertEquals(12, $result);
    }

    public function test_division()
    {
        $result = $this->calculatorService->calculate(Operator::DIVISION, 12, 3);
        $this->assertEquals(4, $result);
    }

    public function test_division_by_zero_throws_exception()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");
    
        $this->calculatorService->calculate(Operator::DIVISION, 5, 0);
    }
}
