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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', 'HomeController@create')->name('create.employee');
Route::post('/store', 'HomeController@store')->name('store.employee');

Route::get('/createTask', 'HomeController@createTask')->name('create.task');

Route::get('/edit/{id}', 'HomeController@edit')->name('edit.employee');
Route::post('/update/{id}', 'HomeController@update')->name('update.employee');

Route::get('/delete/{id}/', 'HomeController@destroy')->name('delete.employee');
Route::get('/removeTask/{ide}/task/{idt}/', 'HomeController@removeTask')->name('remove.task');
