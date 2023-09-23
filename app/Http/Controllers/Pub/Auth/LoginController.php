<?php

namespace App\Http\Controllers\Pub\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pub\Auth\Services\LoginService;
use App\Http\Requests\Pub\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class LoginController extends Controller
{

    private LoginService $service;

    public function __construct(LoginService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        return view('Pub.Auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $request->validated();
        $this->service->login($request);
        return redirect()->route('home');
    }

}
