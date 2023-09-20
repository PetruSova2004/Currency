<?php

namespace App\Http\Controllers\Pub\Auth\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\Auth\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegisterService extends Controller
{
    public function registerUser(RegisterRequest $request): User|RedirectResponse
    {
        try {
            User::query()->create([
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'password' => $request->input('password'),
            ]);
            Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);
            return User::find(Auth::user()->getAuthIdentifier());
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
