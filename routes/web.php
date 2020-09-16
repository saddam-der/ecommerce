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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/admin', 'AdminController');

Route::get('/admin.index', 'AdminController@index')->name('admin.index');

Route::get('/index', 'MenuController@index')->name('tbl_makanan.index');


Route::get('/keranjang', 'MenuController@cart')->name('cart');

// Route::get('/admin/index', 'MenuController@admin');

// Route::resource('/admin', 'AdminController');

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
