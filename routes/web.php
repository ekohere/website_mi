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

Route::get('/layout', function () {
    return view('frontend.layout');
});

Route::get('/kurikulum', function () {
    return view('frontend.kurikulum');
});

Route::get('/aboutmi', function () {
    return view('frontend.aboutmi');
});

Route::get('/visi_misi', function () {
    return view('frontend.visi_misi');
});

Route::get('/', function () {
    return view('frontend.home');
});



Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
//admin
    Route::get('/', 'HomeController@index');
    Route::Resource('/post', 'Admin\PostController');

    Route::Resource('/article', 'Admin\ArticleController');
      Route::Resource('/pengumuman', 'Admin\PengumumanController');
    Route::Resource('/user', 'Admin\UserController');
  Route::Resource('/berita', 'Admin\BeritaController');
//controller
    Route::resource('/configuration', 'Admin\ConfigurationController');
    Route::resource('/type', 'Admin\TypeController');
//admin.category
    Route::resource('/category','CategoryController');
//admin.comment
    Route::resource('/comment', 'CommentController');


//admin.role
    Route::resource('/role', 'RoleController');
//admin.permission
    Route::resource('/permission', 'PermissionController');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/page/{slug}', 'PageController@index');



//Upload Gambar untuk Gallery
Route::group(['middleware' => ['web']], function () {
    Route::resource('images', 'ImageController');
});

//Show Gambar di Blade
Route::group(['middleware' => ['web']], function () {
    Route::resource('gallery', 'ImageShowController');
});