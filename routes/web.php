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

//商品一覧表示
Route::get('/', 'ProductController@showIndex')->name('index');
//商品登録画面表示
Route::get('/create', 'ProductController@showCreate')->name('create')->middleware('auth');
//商品登録
Route::post('/create', 'ProductController@exeSubmit')->name('submit')->middleware('auth');
//商品詳細ページ表示
Route::get('/products/{id}', 'ProductController@showDetail')->name('detail');
//商品編集画面表示
Route::get('/edit/{id}', 'ProductController@showEdit')->name('edit')->middleware('auth');
//商品編集登録
Route::post('/edit', 'ProductController@exeUpdate')->name('update')->middleware('auth');
//商品削除
Route::get('/delete/{id}', 'ProductController@exeDelete')->name('delete')->middleware('auth');


