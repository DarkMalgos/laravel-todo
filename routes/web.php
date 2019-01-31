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
    if (Auth::check()) {
        // The user is logged in...
        return redirect('/task');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/task', 'TaskController@index')->name('home');

Route::post('/task', 'TaskController@store')->name('add');

Route::delete('/task/{id}', 'TaskController@destroy')->name('delete');
