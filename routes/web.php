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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobs','jobcontroller@index');

Route::get('/jobs/create','jobcontroller@create');
Route::post('/jobs','jobcontroller@store');

Route::get('/jobs/{id}/edit','jobcontroller@edit');
Route::patch('/jobs/{id}','jobcontroller@update');

Route::delete('/jobs/{id}','jobcontroller@destroy');
Route::get('/jobs/{id}','jobcontroller@show');