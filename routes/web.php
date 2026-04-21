<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\registrasiController;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.auth');

//beranda
route::get('/beranda', [berandaController::class, 'index'])->name('beranda.utama');

//petugas
route::get('/petugas', [petugasController::class, 'index'])->name('halaman.petugas');

//peminjaman
route::get('/peminjaman', [petugasController::class, 'create'])->name('halaman.peminjaman');

//masuk data peminjaman
Route::post('/peminjaman', [petugasController::class, 'store'])->name('peminjaman');

//hapus peminjaman
Route::delete('/peminjaman/{id}', [petugasController::class, 'destroy'])->name('hapus.peminjaman');
