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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/toevoegen', 'CarController@add_car')->name('add-car');
Route::post('/toevoegen', 'CarController@include_car')->name('include-car');
Route::get('/delete/{id}', 'CarController@delete_car')->name('delete-car');
Route::get('/wijzigen/{id}', 'CarController@wijzigen')->name('change-car');
Route::post('wijzigen/{id}', 'CarController@insert_change')->name('insert-change');
Route::get('/delete-image/{id}', 'CarController@delete_image')->name('delete-image');