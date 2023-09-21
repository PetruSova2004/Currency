<?php

namespace App\Http\Requests\Pub\Currency;

use Illuminate\Foundation\Http\FormRequest;

class ExchangeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'base_currency' => [
                'exists:currencies,currency',
                'min:2',
                'max:10',
                'alpha_dash',
            ],

            'exchanged_currency' => [
                'exists:currencies,currency',
                'min:2',
                'max:10',
                'alpha_dash',
            ],

            'amount' => [
                'required',
                'integer',
            ]
        ];
    }
}
