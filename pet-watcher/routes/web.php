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
    return view('home');
});

// login
// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// login

// Troca Senha
Route::get('reset' , 'UserController@index')->name('reset');
Route::post('reset/password/{user}', 'UserController@update');
// Troca Senha

// cadastro de especies
// Route::resource('especies' , 'EspecieController');
Route::get('especies', 'EspecieController@index');
Route::get('especies/create', 'EspecieController@create');
Route::get('especies/{id}', 'EspecieController@show');
Route::get('especies/edit/{id}', 'EspecieController@edit');
Route::post('especies/store', 'EspecieController@store');
Route::put('especies/{id}', 'EspecieController@update');
Route::delete('especies/delete/{id}', 'EspecieController@destroy');
