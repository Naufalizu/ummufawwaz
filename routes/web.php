<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');

Route::get('/katalogbarang', function () {
    return view('katalogbarang');
})->name('katalogbarang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

