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

Route::get('/home', 'PageController@home');
Route::get('/home', 'PageController@tampildata');
Route::get('/admin', 'PageController@tampiladmin');
Route::get('/admin/transaksi', 'PageController@transaksi');


Route::get('/produk', 'ProdukController@tampildata');
Route::get('/produk/edit/{produk_id}', 'ProdukController@editdata');
Route::get('/produk/hapus/{produk_id}', 'ProdukController@destroy');
Route::get('/produk/tambah', 'ProdukController@produktambah');
Route::get('/keranjang', 'PageController@keranjang');
Route::get('/pembayaran', 'PageController@pembayaran');
Route::get('/pembayaran/berhasil', 'PageController@berhasil');

Route::get('/produk/detail/{produk_id}', 'ProdukController@detail');


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'PageController@logout');
