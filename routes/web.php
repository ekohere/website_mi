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

//admin
Route::get('/tampiladmin', 'BladeController@index');

//frontend
Route::get('/kiri', 'BladeController@tampil_kiri');
Route::get('/kanan', 'BladeController@tampil_kanan');

//admin.category
Route::resource('admin/category','CategoryController');
//admin.comment
Route::resource('admin/comment', 'CommentController');
