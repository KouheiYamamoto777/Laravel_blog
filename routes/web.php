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

// ブログ一覧画面を表示する
Route::get('/', 'BlogController@showList')->name('blogs');

// ブログ登録画面を表示する
Route::get('/blog/create', 'BlogController@showCreate')->name('create');

// ブログ登録
Route::post('/blog/store', 'BlogController@exeStore')->name('store');

// ブログ詳細画面を表示する
Route::get('/blog/{id}', 'BlogController@showDetail')->name('show');

// ブログ編集画面を表示する
Route::get('/blog/edit/{id}', 'BlogController@showEdit')->name('edit');

// ブログを編集する
Route::post('/blog/update', 'BlogController@exeUpdate')->name('update');

// ブログを削除する
Route::post('/blog/delete/{id}', 'BlogController@exeDelete')->name('delete');