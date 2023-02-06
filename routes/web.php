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
    return view('products.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@showIndex')->name('index');
Route::get('/create', 'ProductController@showCreate')->name('create');
Route::post('/create', 'ProductController@exeSubmit')->name('submit');
Route::get('/products/{id}', 'ProductController@showDetail')->name('detail');
Route::get('/edit/{id}', 'ProductController@showEdit')->name('edit');
Route::post('/edit/{id}', 'ProductController@exeUpdate')->name('update');

