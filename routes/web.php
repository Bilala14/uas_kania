<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\guruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JadwalController; // Tambahkan ini
use App\Http\Controllers\HomeController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Guru
Route::get('/guru', [guruController::class, 'index']);
Route::get('/guru/tambah', [guruController::class, 'create']);
Route::post('/guru', [guruController::class, 'store']);
Route::get('/guru/edit/{id}', [guruController::class, 'edit']);
Route::put('/guru/{id}', [guruController::class, 'update']);
Route::delete('/guru/{id}', [guruController::class, 'destroy']);

// Data Kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/tambah', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit']);
Route::put('/kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);

// Data Jadwal
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/jadwal/tambah', [JadwalController::class, 'create']);
Route::post('/jadwal', [JadwalController::class, 'store']);
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit']);
Route::put('/jadwal/{id}', [JadwalController::class, 'update']);
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy']);
