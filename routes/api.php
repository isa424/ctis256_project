<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth'], function() {
    // Users
    Route::get('/users', 'UserController@search');
    Route::get('/users/{id}', 'UserController@profile');
    Route::post('/users/{id}', 'UserController@updateProfile');

    // Posts
    Route::post('/posts', 'PostController@makePost');
    Route::post('/posts/{id}', 'PostController@editPost');
    Route::delete('/posts/{id}', 'PostController@deletePost');
    Route::post('/posts/{id}/like', 'PostController@likePost');
    Route::post('/posts/{id}/dislike', 'PostController@dislikePost');

    // Comments
    Route::post("/posts/{postId}/comments", 'CommentController@makeComment');
    Route::post("/posts/{postId}/comments/{commentId}", 'CommentController@editComment');
    Route::delete('/posts/{postId}/comments/{commentId}', 'CommentController@deleteComment');

    // TODO: Friends
    // Route::post('/friends/{id}', '');
    // Route::delete('/friends/{id}', '');
});
