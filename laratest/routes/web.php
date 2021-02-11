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

Route::get('/login', 'LoginControl@index');
Route::post('/login', 'LoginControl@verify');
Route::get('/logout', 'LogoutControl@index');

Route::middleware([SessionVerify::class])->group(function() {
    Route::get('/home', 'HomeController@index');
    Route::get('/home/userlist', 'HomeController@userList');
    Route::get('/home/edit/{id}', 'HomeController@editUser');
    Route::post('/home/edit/{id}', 'HomeController@updateUser');
    Route::get('/home/delete/{id}', 'HomeController@deleteUser');
    Route::post('/home/delete/{id}', 'HomeController@confirmDelete');
    Route::get('/home/create', 'HomeController@createUser');
    Route::post('/home/create', 'HomeController@storeUser');
});

Route::get('/', function () {
    return redirect('/login');
});
