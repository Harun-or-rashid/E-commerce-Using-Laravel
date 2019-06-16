<?php

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

Route::get('/','HomeController@ShowHome');
Route::get('p/{slug}','ProductController@ShowDetails')->name('product.details');
Route::get('cart','CartController@ShowCart')->name('show.cart');
Route::post('addcart','CartController@AddCart')->name('add.cart');
