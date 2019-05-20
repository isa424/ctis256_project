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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/test', function () {
	return view ('test'); } );

Route::get ('/friends', function () {
	return view('friends');
});

Route::get ('/friendslist', function () {
	return view('friendslist');
});

Route::get ('/search', function () {
	return view('search');
});

Route::get ('/edit', function () {
	return view('edit');
});

Route::get ('/reply', function () {
	return view('reply');
});

