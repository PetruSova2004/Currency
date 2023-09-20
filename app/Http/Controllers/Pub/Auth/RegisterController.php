<?php

namespace App\Http\Controllers\Pub\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('Pub.Auth.register');
    }
}
