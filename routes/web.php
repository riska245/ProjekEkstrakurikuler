<?php

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