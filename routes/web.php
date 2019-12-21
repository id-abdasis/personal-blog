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

Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('/detail-post', 'BlogController@detailPost')->name('blog.detail-post');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.app');
    });
    Route::group(['prefix' => 'artikel'], function () {
        Route::get('tambah-artikel', 'BlogController@tambahArtikel')->name('admin.tambah-artikel');
        Route::post('tambah-artikel', 'BlogController@postArtikel')->name('admin.post-artikel');
    });
});
