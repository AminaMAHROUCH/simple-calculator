<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'number_1'  => 'required|numeric',
            'number_2'  => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
        ];
    }
}