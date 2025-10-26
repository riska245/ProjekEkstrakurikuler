<?php

use App\Http\Controllers\KontakController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return view('layout.app');
// });

// page
Route::get('/', function () {
    return view('page.beranda.beranda');
});
Route::get('/beranda', function () {
    return view('page.beranda.beranda');
});
Route::get('/tentang-kami', function () {
    return view('page.tentang.tentang');
});


// account
Route::get('/daftar', function () {
    return view('account.daftar.daftar');
});
Route::get('/masuk', function () {
    return view('account.masuk.masuk');
});


// kontak
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
