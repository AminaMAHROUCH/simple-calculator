<?php

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculatorRequest;
use App\Services\CalculatorService;
use Illuminate\Support\Facades\Log;

class CalculatorController extends Controller
{
    protected CalculatorService $calculatorService;

    public function __construct(CalculatorService $calculatorService) {
        $this->calculatorService = $calculatorService;
    }

    public function index()
    {
        return view ('calculator');
    }

 
    public function calculate(CalculatorRequest $request)
    {
        $data = $request->validated();

        $number_1   = $data['number_1'];
        $number_2   = $data['number_2'];
        $operation  = $data['operation'];
       
        try {
            $result = $this->calculatorService->calculate(
                $operation,
                $number_1,
                $number_2
            );
          
        } catch (\Exception $e) {
            $result = $e->getMessage();
        }
        
        return view('calculator', compact('result'));
    }

}
