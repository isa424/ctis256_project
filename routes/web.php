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
    return redirect('/home');
});
Route::get('/friends/accept/{id}', 'UserController@acceptFriendRequest');
Route::get('/friends/remove/{id}', 'UserController@removeFriend');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/test', function () {
	return view ('test'); } );

Route::get ('/friends', function () {
	return view('friends');
});

Route::get ('/friendslist', 'UserController@friendslist');

Route::get('/search', 'UserController@search');

Route::get ('/edit', function () {
	return view('edit');
});

Route::get ('/reply', function () {
	return view('reply');
});

Route::get ('/userProfile/{id}', 'UserController@profile');

Route::post('/posts', 'PostController@makePost');
Route::get('/posts/{id}/delete', 'PostController@deletePost');
Route::get('/posts/{id}/edit', 'PostController@editPost');
Route::post('/posts/{id}/update', 'PostController@updatePost');
