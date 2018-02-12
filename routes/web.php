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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/api/forms', 'ApiController@postForm');

$resolve404 = function (){
	return redirect('/');
};

Route::any('/fake_1', $resolve404)->name('password.request');
Route::any('/fake_2', $resolve404)->name('password.email');
Route::any('/fake_3', $resolve404)->name('register');

Auth::routes();

Crud::routes();

Pages::routes();

Route::get('/', function () {
	return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
