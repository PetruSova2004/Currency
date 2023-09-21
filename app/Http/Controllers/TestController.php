<?php

namespace App\Http\Controllers;

use Illuminate\Http\ResponseTrait;

class TestController extends Controller
{
    use ResponseTrait;
    public function test()
    {
        return response()->redirectToRoute('currency.index', ['yes' => 'zbs']);
    }

    public function test2()
    {

    }

}
