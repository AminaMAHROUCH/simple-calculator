<?php

namespace Tests\Feature;

use Tests\TestCase;


class CalculatorControllerTest extends TestCase
{
    public function testCalculate()
    {
        $response = $this->post('/calculator', [
            'number_1' => 5,
            'number_2' => 3,
            'operation' => 'add',
            '_token' => csrf_token(),
        ]);

        $response->assertStatus(200);
        $response->assertViewHas('result');
    }

    public function testInvalidOperation()
    {
        $response = $this->post('/calculator', [
            'number_1' => 5,
            'number_2' => 3,
            'operation' => 'unknown',
            '_token' => csrf_token(),
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('operation');
    }
}
