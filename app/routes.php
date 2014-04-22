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

Route::get('/home', function()
{
	return View::make('hello');
});

Route::get('/users','UserController@getUsers');

Route::get('/','NotesController@showNotes');

Route::post('/notes/add', 'NotesController@addNotes');

Route::post('/notes/remove', 'NotesController@deleteNotes');

Route::post('/notes/update', 'NotesController@updateNotes');
