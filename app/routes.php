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

/*Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function()
{
    $users = User::all();
	return View::make('users')->with('users',$users);
}); */
Blade::setContentTags('<%', '%>');  // Change Laravel Tags because of conflict with Angular

Route::get('/','NotesController@showNotes');

Route::get('/notes/list','NotesController@getNotes');

Route::post('/notes/add', 'NotesController@addNotes');

Route::post('/notes/remove', 'NotesController@deleteNotes');

Route::post('/notes/update', 'NotesController@updateNotes');
