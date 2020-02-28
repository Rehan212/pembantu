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
Route::get('/rehan', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('backend.welcome');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/frontend','FrontendController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('pembantu', 'PembantuController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('majikan', 'MajikanController');
    Route::resource('pemesanan', 'PemesananController');
});
