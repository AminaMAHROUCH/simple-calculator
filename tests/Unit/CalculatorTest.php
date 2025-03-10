<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\CalculatorService;

class CalculatorTest extends TestCase
{
    protected $calculatorService;

    public function setUp(): void
    {
        parent::setUp();

        $this->calculatorService = new CalculatorService();
    }

    public function testAddition()
    {
        $result = $this->calculatorService->calculate('add', 5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtraction()
    {
        $result = $this->calculatorService->calculate('subtract', 5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiplication()
    {
        $result = $this->calculatorService->calculate('multiply', 5, 3);
        $this->assertEquals(15, $result);
    }

    public function testDivision()
    {
        $result = $this->calculatorService->calculate('divide', 6, 3);
        $this->assertEquals(2, $result);
    }

    public function testDivisionByZero()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->calculatorService->calculate('divide', 5, 0);
    }

    public function testUnsupportedOperation()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->calculatorService->calculate('unsupported', 5, 3);
    }
}
