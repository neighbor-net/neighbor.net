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
    return view('phpinfo');
});

// Basic認証＋URLアクセス制御
Route::group(['middleware' => ['auth.basic','auth.url']], function () {
    Route::get('/todo', 'Todo\Index');
    Route::get('/todo/edit/{id}', 'Todo\Edit');
    Route::get('/todo/search', 'Todo\Search');
    Route::get('/todo/find', 'Todo\Find');
});

Route::get('/logout', 'Logout');
