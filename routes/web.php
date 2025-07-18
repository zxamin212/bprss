<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KreditController;
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/produk', function () {
    return view('produk');
});
Route::get('/jaringan', function () {
    return view('jaringan');
});

Route::get('/direksi', function () {
    return view('direksi');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tabungan', function () {
    return view('tabungan');
});
Route::get('/deposito', function () {
    return view('deposito');
});
Route::get('/konsumtif', function () {
    return view('konsumtif');
});
Route::get('/umkm', function () {
    return view('umkm');
});
Route::get('/pinek', function () {
    return view('pinek');
});
Route::get('/wuss', function () {
    return view('wuss');
});
Route::get('/blog1', function () {
    return view('blog1');
});


Route::get('/simulasi-kredit', [KreditController::class, 'showForm']);
Route::post('/hitung-kredit', [KreditController::class, 'hitungAngsuran'])->name('hitung-kredit');


