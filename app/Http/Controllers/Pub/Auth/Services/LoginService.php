<?php

namespace App\Http\Controllers\Pub\Auth\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginService extends Controller
{
    public function login(LoginRequest $request): void
    {
        Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
    }
}
