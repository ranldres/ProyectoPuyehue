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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('index', 'MenuController@view');
Route::get('mapa', 'Bcontroller@botonuno');
Route::get('sitios', 'MenuController@sitios');
Route::get('gastronomia', 'MenuController@gastronomia');
Route::get('evento', 'MenuController@evento');
Route::get('alojamiento', 'MenuController@alojamiento');