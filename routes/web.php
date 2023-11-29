<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/barang', function () {
    return view('halaman.index-barang');
})->name('barang');

Route::get('/kasir', function () {
    return view('halaman.index-kasir');
})->name('kasir');

Route::get('/tenan', function () {
    return view('halaman.index-tenan');
})->name('tenan');

Route::get('/tambahBarang', function () {
    return view('halaman.tambah.tambah-barang');
})->name('tambahBarang');
