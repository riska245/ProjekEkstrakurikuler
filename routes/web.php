<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Halaman umum
Route::view('/', 'page.beranda.beranda');
Route::view('/beranda', 'page.beranda.beranda');
Route::view('/tentang-kami', 'page.tentang.tentang');

// Halaman akun
// Hanya tampil jika user BELUM login (frontend nanti cek token)
Route::view('/masuk', 'account.masuk.masuk');
Route::view('/daftar', 'account.daftar.daftar');

// Halaman setelah login
Route::view('/beranda', 'page.beranda.beranda');

// Kontak
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
