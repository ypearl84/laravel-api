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
Route::get('note', 'NoteController@index')->name('note.index');
Route::get('note/{id}', 'NoteController@show')->name('note.show');
Route::post('note', 'NoteController@store')->name('note.store');
Route::put('note/{id}', 'NoteController@update')->name('note.update');
Route::delete('note/{id}', 'NoteController@destroy')->name('note.destroy');
