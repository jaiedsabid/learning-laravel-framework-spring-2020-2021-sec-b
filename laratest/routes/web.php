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

Route::get('/login', 'LoginControl@index')->name('login.index');
Route::post('/login', 'LoginControl@verify')->name('login.verify');
Route::get('/logout', 'LogoutControl@index')->name('logout.index');

Route::middleware([SessionVerify::class])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::middleware([CheckAdmin::class])->group(function() {
        Route::get('/home/userlist', 'HomeController@userList')->name('home.userList');
        Route::get('/home/edit/{id}', 'HomeController@editUser')->name('home.editUser');
        Route::post('/home/edit/{id}', 'HomeController@updateUser')->name('home.updateUser');
        Route::get('/home/delete/{id}', 'HomeController@deleteUser')->name('home.deleteUser');
        Route::post('/home/delete/{id}', 'HomeController@confirmDelete')->name('home.confirmDelete');
        Route::get('/home/create', 'HomeController@createUser')->name('home.createUser');
        Route::post('/home/create', 'HomeController@storeUser')->name('home.storeUser');
        Route::get('/home/details/{id}', 'HomeController@userDetails')->name('home.userDetails');
    });
});

Route::get('/', function () {
    return redirect('/login');
});
