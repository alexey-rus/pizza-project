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

Route::get('/', 'IndexController@index')->name('index');

Route::post('/cart/add/{product}', 'CartController@add')->name('cart.add');
Route::delete('/cart/remove/{itemId}', 'CartController@remove')->name('cart.remove');
Route::put('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');

Route::post('/order/create', 'OrderController@create')->name('order.create');
Route::get('/order/show/{token}', 'OrderController@show')->name('order.show');
