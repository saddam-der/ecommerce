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




Route::resource('/admin', 'AdminController');

Route::resource('/order', 'OrderController');




Route::get('index/order', 'OrderController@index')->name('order.index');

Route::get('/order', 'OrderController@cart')->name('order');

Route::get('/admin.index', 'AdminController@index')->name('admin.index');



Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
//     Route::get('/index', 'MenuController@index')->name('tbl_makanan.index');
// });

// Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
//     Route::get('/index', 'MenuController@index')->name('tbl_makanan.index');
// });
