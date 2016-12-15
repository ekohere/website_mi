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
    return view('admin.layout');
});

//admin
Route::get('/tampiladmin', 'BladeController@index');

//frontend
Route::get('/kiri', 'BladeController@tampil_kiri');
Route::get('/kanan', 'BladeController@tampil_kanan');

//controller
Route::resource('admin/configuration', 'Admin\ConfigurationController');
Route::resource('admin/type', 'Admin\TypeController');