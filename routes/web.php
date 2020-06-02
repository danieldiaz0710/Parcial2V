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

Route::get('/store', 'LigaCont@store');
Route::get('/index', 'LigaCont@index');
Route::get('/update', 'LigaCont@update');
Route::get('/update_2', 'LigaCont@update_2');
Route::get('/destroy', 'LigaCont@destroy');
Route::get('/destroy_2', 'LigaCont@destroy_2');

Route::get('/equipo_store', 'EquipoCont@store');
Route::get('/equipo_store_2', 'EquipoCont@store_2');
Route::get('/equipo_store_3', 'EquipoCont@store_3');
Route::get('/equipo_index', 'EquipoCont@index');
Route::get('/equipo_update', 'EquipoCont@update');
Route::get('/equipo_update_2', 'EquipoCont@update_2');
Route::get('/equipo_destroy', 'EquipoCont@destroy');
Route::get('/equipo_destroy_2', 'EquipoCont@destroy_2');
Route::get('/equipo_relacionar', 'EquipoCont@relacionar');
Route::get('/equipo_update_morfica', 'EquipoCont@update_morfica');
Route::get('/equipo_destroy_morfica', 'EquipoCont@destroy_morfica');