<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'App\Http\Controllers\TestController@test')->name('test');

Route::get('/login', 'App\Http\Controllers\Pub\Auth\LoginController@index')->name('login.index');
Route::get('/register', 'App\Http\Controllers\Pub\Auth\RegisterController@index')->name('register.index');

