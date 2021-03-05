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

Route::get('/signup', 'Signup@index')->name('signup.index');
Route::post('/signup', 'Signup@store')->name('signup.store');

Route::middleware([CheckSession::class])->group(function () {
    Route::get('/home', 'Home@index')->name('home.index');
    Route::get('/logout', 'Logout@index')->name('logout.index');

    Route::get('/system/sales', 'Sales@index')->name('sales.index');
    Route::get('/system/sales/physical_store', 'Sales@physical')->name('sales.physical');
    Route::post('/system/sales/physical_store', 'Sales@store')->name('sales.store');

    Route::get('system/product_management', 'ProductManage@index')->name('product_manage.index');

    Route::get('system/product_management/existing_products', 'ProductManage@existing_products')->name('products.existing');
    Route::get('system/product_management/upcoming_products', 'ProductManage@upcoming_products')->name('products.upcoming');
    Route::get('system/product_management/add_product', 'ProductManage@add_product')->name('products.add');
    Route::post('system/product_management/add_product', 'ProductManage@store_product')->name('products.store');

    Route::get('system/product_management/existing_products/view/{id}', 'ProductManage@ex_view')->name('eproduct.ex_view');
    Route::get('system/product_management/existing_products/edit/{id}', 'ProductManage@ex_edit')->name('eproduct.ex_edit');
    Route::post('system/product_management/existing_products/edit/{id}', 'ProductManage@ex_update')->name('eproduct.ex_update');
    Route::get('system/product_management/existing_products/delete/{id}', 'ProductManage@ex_delete')->name('eproduct.ex_delete');
    Route::post('system/product_management/existing_products/delete/{id}', 'ProductManage@ex_distroy')->name('eproduct.ex_distroy');
});

Route::get('/', function () {
    return redirect()->route('login.index');
});
