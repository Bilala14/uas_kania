<?php

use App\Http\Controllers\guruController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Jika akses langsung ke root, arahkan ke login
Route::get('/', function () {
    return redirect('/login');
});

// Halaman template utama, hanya bisa diakses jika sudah login
Route::get('/cektemplate', function () {
    return view('layouts.template');
});

// Default auth routes (login, register, logout)
Auth::routes();

// Data Guru
Route::get('/guru', [guruController::class, 'index']);
Route::get('/guru/tambah', [guruController::class, 'create']);
Route::post('/guru', [guruController::class, 'store']);
Route::get('/guru/edit/{id}', [guruController::class, 'edit']);
Route::put('/guru/{id}', [guruController::class, 'update']);
Route::delete('/guru/{id}', [guruController::class, 'destroy']);
