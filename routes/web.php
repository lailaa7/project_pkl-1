<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.master');
});

Route::get('databrg', 'App\Http\Controllers\MasterController@index');
Route::get('kategori', 'App\Http\Controllers\MasterController@kategori');
Route::get('/kategori/addkategori', 'App\Http\Controllers\MasterController@addkategori');

Route::get('home', 'App\Http\Controllers\HomeController@index');

Route::get('brgmasuk', 'App\Http\Controllers\TransaksiController@brgmasuk');
Route::get('brgkeluar', 'App\Http\Controllers\TransaksiController@brgkeluar');

Route::get('supplier', 'App\Http\Controllers\SupplierController@supplier');
