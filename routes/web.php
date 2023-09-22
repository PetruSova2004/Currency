<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pub\Post\PostController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'App\Http\Controllers\Pub\Auth\LogoutController@logout')->name('logout');

    Route::get('/currency', 'App\Http\Controllers\Pub\Currency\CurrencyController@index')->name('currency.index');
    Route::post('/currencyExchange', 'App\Http\Controllers\Pub\Currency\CurrencyController@exchange')->name('currency.exchange');

    Route::resource('post', PostController::class);
    Route::get('/importPost', 'App\Http\Controllers\Pub\Post\PostController@import')->name('post.import');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'App\Http\Controllers\Pub\Auth\LoginController@index')->name('login.index');
    Route::post('/loginStore', 'App\Http\Controllers\Pub\Auth\LoginController@login')->name('login.store');

    Route::get('/register', 'App\Http\Controllers\Pub\Auth\RegisterController@index')->name('register.index');
    Route::post('/registerStore', 'App\Http\Controllers\Pub\Auth\RegisterController@register')->name('register.store');

});


