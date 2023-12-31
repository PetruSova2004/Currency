<?php

namespace App\Http\Requests\Pub\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class LoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' =>
                [
                    'required',
                    'email',
                    'exists:users',
                ],
            'password' =>
                [
                    'required',
                    'min:6',
                    'max:255',
                    'string',
                    'regex:/^[^\s]+$/', // Without spaces
                ],
        ];
    }

}
