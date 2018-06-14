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

Route::get('/', 'StrategieController@index');

Route::get('/pattern/strategie', 'StrategieController@index');

/*
 * A FAIRE
 */
Route::get('/pattern/observer', 'ObserverController@index');
Route::get('/pattern/decorateur', 'ObserverController@index');
Route::get('/pattern/fabrique/abstraite', 'ObserverController@index');
Route::get('/pattern/fabrique/normal', 'ObserverController@index');
Route::get('/pattern/singleton', 'ObserverController@index');
Route::get('/pattern/command', 'ObserverController@index');
Route::get('/pattern/adapter', 'ObserverController@index');
