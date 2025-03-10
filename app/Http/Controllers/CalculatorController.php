<?php

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculatorRequest;
use App\Services\Calculator\CalculatorService;
use App\Services\Calculator\Enums\Operator;
use Illuminate\Validation\ValidationException;

class CalculatorController extends Controller
{
    public function __construct(
        private CalculatorService $calculatorService
    ) {}

    public function index()
    {
        return view ('calculator');
    }
 
    public function calculate(CalculatorRequest $request)
    {
        $result = 0;
        try {
            $result = $this->calculatorService->calculate(
                operator: Operator::from($request->input('operator')),
                number1: $request->input('number1'),
                number2: $request->input('number2'),
            );
        } catch (\InvalidArgumentException $ex) {
            throw ValidationException::withMessages([
                'error' => [$ex->getMessage()],
            ]);
        }

        return view('calculator', compact('result'));
    }
}
