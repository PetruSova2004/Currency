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
Route::get('/test', 'App\Http\Controllers\TestController@test')->name('test');
Route::get('/', 'App\Http\Controllers\Pub\Index\IndexController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'App\Http\Controllers\Pub\Auth\LogoutController@logout')->name('logout');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'App\Http\Controllers\Pub\Auth\LoginController@index')->name('login.index');
    Route::post('/loginStore', 'App\Http\Controllers\Pub\Auth\LoginController@login')->name('login.store');

    Route::get('/register', 'App\Http\Controllers\Pub\Auth\RegisterController@index')->name('register.index');
    Route::post('/registerStore', 'App\Http\Controllers\Pub\Auth\RegisterController@register')->name('register.store');

});


