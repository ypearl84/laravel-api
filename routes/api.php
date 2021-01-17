<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/greeting', function() {
	return 'Hello world';
});

// route for Note
Route::get('Note', 'NoteController@index')->name('note.index');
Route::get('Note/{id}', 'NoteController@show')->name('note.show');
Route::post('Note', 'NoteController@store')->name('note.store');
Route::put('Note/{id}', 'NoteController@update')->name('note.update');
Route::delete('Note/{id}', 'NoteController@destroy')->name('note.destroy');
