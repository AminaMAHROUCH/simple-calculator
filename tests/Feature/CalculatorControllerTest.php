<?php

namespace Tests\Feature;

use App\Services\Calculator\Enums\Operator;
use Tests\TestCase;

class CalculatorControllerTest extends TestCase
{
    public function test_addition_calculation()
    {
        $response = $this->post(route('calculator.calculate'), [
            'operator' => Operator::ADDITION->value,
            'number1' => 7,
            'number2' => 5,
        ]);

        $response->assertStatus(200);
        $response->assertViewIs('calculator');
        $response->assertSee('12');
    }

    public function test_subtraction_calculation()
    {
        $response = $this->post(route('calculator.calculate'), [
            'operator' => Operator::SUBTRACTION->value,
            'number1' => 10,
            'number2' => 3,
        ]);

        $response->assertStatus(200);
        $response->assertViewIs('calculator');
        $response->assertSee('7');
    }

    public function test_multiplication_calculation()
    {
        $response = $this->post(route('calculator.calculate'), [
            'operator' => Operator::MULTIPLICATION->value,
            'number1' => 6,
            'number2' => 4,
        ]);

        $response->assertStatus(200);
        $response->assertViewIs('calculator');
        $response->assertSee('24');
    }

    public function test_division_calculation()
    {
        $response = $this->post(route('calculator.calculate'), [
            'operator' => Operator::DIVISION->value,
            'number1' => 20,
            'number2' => 4,
        ]);

        $response->assertStatus(200);
        $response->assertViewIs('calculator');
        $response->assertSee('5');
    }

    public function test_division_by_zero_returns_validation_error()
    {
        $response = $this->post(route('calculator.calculate'), [
            'operator' => Operator::DIVISION->value,
            'number1' => 10,
            'number2' => 0,
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('error');
    }

    public function test_invalid_operator_returns_validation_error()
    {
        $response = $this->post(route('calculator.calculate'), [
            'operator' => '%',
            'number1' => 5,
            'number2' => 3,
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('operator');
    }

}
