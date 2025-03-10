<?php

namespace App\Http\Requests;

use App\Services\Calculator\Enums\Operator;
use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'number1'  => 'required|numeric',
            'number2'  => 'required|numeric',
            'operator' => 'required|in:'.implode(',', collect(Operator::cases())->pluck('value')->toArray()),

        ];
    }
}