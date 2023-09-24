<?php

namespace App\Http\Controllers\Pub\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pub\Auth\Services\RegisterService;
use App\Http\Requests\Pub\Auth\RegisterRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{

    private RegisterService $service;

    public function __construct(RegisterService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        return view('Pub.Auth.register');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        try {
            $request->validated();
            $user = $this->service->registerUser($request);
            return redirect()->route('home')->with('success', "Welcome " . $user->name);
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

}
