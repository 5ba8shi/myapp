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

Route::get('/', 'EntriesController@index');
Route::get('/news', 'EntriesController@news');
Route::get('/menu', 'EntriesController@menu');

Route::get('/contact', 'ContactsController@contact');
Route::post('/contact/confirm', 'ContactsController@confirm');
Route::post('/contact/thanks', 'ContactsController@send');

Route::get('/{id}', 'EntriesController@view');