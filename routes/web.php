<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perpustakaan', function () {
    return view('library');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::resource('mahasiswa', MahasiswaController::class);