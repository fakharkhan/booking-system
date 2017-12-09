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

Route::get('/download','ClientsController@download')->name('download');

Route::get('/clients/create','ClientsController@create');
Route::get('/clients/{id}','ClientsController@show');
Route::get('/clients','ClientsController@index')->name('clients');
Route::post('/clients','ClientsController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
