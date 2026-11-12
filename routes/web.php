<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntreanController;

// Halaman Utama (Home / Index)
Route::get('/', function () {
    return view('home');
});

// Halaman Khusus CRUD Antrean
Route::resource('antrean', AntreanController::class);
