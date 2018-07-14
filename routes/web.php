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

Route::get('/login', 'UserController@login')->name('login');
Route::get('/register', 'UserController@register')->name('register');

Route::get('/users', 'UserController@index');
Route::get('/categories', 'CategoryController@index');
// Route::resource('catgories', 'CategoryController');
