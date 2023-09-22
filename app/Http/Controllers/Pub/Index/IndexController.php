<?php

namespace App\Http\Controllers\Pub\Index;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('Pub.Main.index');
    }
}
