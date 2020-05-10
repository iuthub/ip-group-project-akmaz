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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index')->name('index');
Route::get('/schema', 'IndexController@schema')->name('schema');
Route::get('/payment', 'IndexController@payment')->name('payment');
Route::get('/product', 'IndexController@product')->name('product');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::post('/contact-get', 'IndexController@contactGet')->name('contact.store');