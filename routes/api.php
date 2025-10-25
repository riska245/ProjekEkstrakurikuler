<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;


Route::post('/daftar', [AuthController::class, 'daftar']);
Route::post('/masuk', [AuthController::class, 'masuk']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/keluar', [AuthController::class, 'keluar']);
});
