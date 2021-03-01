<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', 'Login@index')->name('login.index');
Route::post('/login', 'Login@verify')->name('login.verify');

Route::middleware([CheckSession::class])->group(function () {
    Route::get('/home', 'Home@index')->name('home.index');
});

Route::get('/', function () {
    return redirect()->route('login.index');
});