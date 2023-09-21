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


Route::get('/', 'App\Http\Controllers\Pub\Index\IndexController@index')->name('home');

Route::get('/test', 'App\Http\Controllers\TestController@test')->name('test');
Route::get('/test2', 'App\Http\Controllers\TestController@test2')->name('test2');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'App\Http\Controllers\Pub\Auth\LogoutController@logout')->name('logout');

    Route::get('/currency', 'App\Http\Controllers\Pub\Currency\CurrencyController@index')->name('currency.index');
    Route::post('/currencyExchange', 'App\Http\Controllers\Pub\Currency\CurrencyController@exchange')->name('currency.exchange');

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'App\Http\Controllers\Pub\Auth\LoginController@index')->name('login.index');
    Route::post('/loginStore', 'App\Http\Controllers\Pub\Auth\LoginController@login')->name('login.store');

    Route::get('/register', 'App\Http\Controllers\Pub\Auth\RegisterController@index')->name('register.index');
    Route::post('/registerStore', 'App\Http\Controllers\Pub\Auth\RegisterController@register')->name('register.store');

});


