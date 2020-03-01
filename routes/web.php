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

Route::get('/contact', 'ContactsController@contact')->name('contacts.contact');
Route::post('/confirm', 'ContactsController@confirm')->name('contacts.confirm');
Route::get('/thanks', 'ContactsController@send')->name('contacts.send');

Route::get('/{id}', 'EntriesController@view');