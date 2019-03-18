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

//test page
Route::get('/welcome', function() {
	return view('welcome');
});

//product 
Route::get('/', 'ProductController@index');

//about user login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
