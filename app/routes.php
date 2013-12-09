<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('car/new', 'CarController@getNew');
Route::post('car/new', 'CarController@postNew');
Route::get('car/{id}', 'CarController@getIndex');
Route::get('search/{query?}', 'SearchCarController@search');

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/logout',                 'UserController@logout');

// Add comment to a picture
Route::post('addComment', 'CommentController@createComment');
Route::get('deleteComment/{id}', 'CommentController@deleteComment');

