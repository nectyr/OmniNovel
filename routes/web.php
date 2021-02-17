<?php

use Illuminate\Support\Facades\Route;

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
    return  'Website';
});

Auth::routes();


/** Routes Requiring Authentication */
Route::middleware(['auth'])->group(function () {

    /** Main Page Routes */
    Route::get('/dashboard', '\App\Http\Controllers\HomeController@index')->name('dashboard');
    Route::get('/book', '\App\Http\Controllers\BookController@page')->name('book');
    Route::get('/wiki', '\App\Http\Controllers\WikiController@page')->name('wiki');

    /** Book Related Routes */
    Route::get('/books', '\App\Http\Controllers\BookController@index')->name('books');
    Route::get('/chapters', '\App\Http\Controllers\ChapterController@index')->name('chapters');
    Route::get('/characters', '\App\Http\Controllers\CharacterController@index')->name('characters');
    Route::get('/scenes', '\App\Http\Controllers\SceneController@index')->name('scenes');
    Route::get('/collaborators', '\App\Http\Controllers\CollaboratorController@index')->name('collaborators');

    /** User Related Routes */
    Route::get('/user/show', '\App\Http\Controllers\UserController@show')->name('user.show');


});
