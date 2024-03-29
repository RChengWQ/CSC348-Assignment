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
    return view('main');
});

Route::get('posts', 'PostController@index')->name('posts.index')->middleware('auth');
Route::get('posts/create', 'PostController@create')->name('posts.create')->middleware('auth');
Route::post('posts', 'PostController@store')->name('posts.store')->middleware('auth');
Route::get('posts/{id}', 'PostController@show')->name('posts.show')->middleware('auth');

Route::get('profile', 'ProfileController@index')->name('profile.index')->middleware('auth');
Route::get('comments/{id}', 'CommentController@create')->name('comments.create')->middleware('auth');
Route::post('comments', 'CommentController@store')->name('comments.store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
