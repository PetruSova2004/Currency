<?php

namespace App\Http\Controllers\Pub\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('Pub.Main.index');
    }
}
