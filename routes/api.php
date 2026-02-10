<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PresensiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Semua route di sini otomatis pakai prefix /api
| Contoh: POST /api/login
*/

// ================= AUTH =================
Route::post('/login', [AuthController::class, 'login']);

// ================= PROTECTED ROUTES =================
Route::middleware('auth:sanctum')->group(function () {

    // auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    // ================= PRESENSI =================
    Route::post('/presensi/masuk', [PresensiController::class, 'absenMasuk']);
    Route::post('/presensi/pulang', [PresensiController::class, 'absenPulang']);
    Route::get('/presensi/hari-ini', [PresensiController::class, 'hariIni']);
    Route::get('/presensi/riwayat', [PresensiController::class, 'riwayat']);

});
