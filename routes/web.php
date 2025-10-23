<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.beranda.beranda');
});

Route::get('/test', function () {
    return view('layout.app');
});

Route::get('/beranda', function () {
    return view('page.beranda.beranda');
});
