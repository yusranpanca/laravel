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

Route::get('/', 'BlogController@index');
Route::get('/article/{post}', 'BlogController@show');
Route::get('/authors/{user}', 'BlogController@author');
Route::prefix('manage')->middleware('auth')->group(function() {
    Route::resource('posts', 'PostController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
