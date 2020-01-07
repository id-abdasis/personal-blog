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



Auth::routes([
    'register' => false
]);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.app');
    });
    Route::group(['prefix' => 'artikel'], function () {
        Route::get('tambah-artikel', 'BlogController@tambahArtikel')->name('admin.tambah-artikel');
        Route::post('tambah-artikel', 'BlogController@postArtikel')->name('admin.post-artikel');
        Route::post('update-artikel', 'BlogController@updateArtikel')->name('admin.update-artikel');
        Route::get('edit-artikel/{slug}', 'BlogController@editArtikel')->name('admin.edit-artikel');
        Route::get('daftar-artikel', 'BlogController@daftarArtikel')->name('admin.daftar-artikel');
        Route::get('delete-artikel/{id}', 'BlogController@deleteArtikel')->name('admin.delete-artikel');

    });
});


Route::get('/installation', 'BlogController@installation')->name('installation');
Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('/{name}', 'BlogController@detailPost')->name('blog.detail-post');

