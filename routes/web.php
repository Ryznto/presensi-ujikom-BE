<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\PresensiController;
use Illuminate\Http\Request;

// root: Langsung ke dashboard

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/admin/karyawan/edit', function () {
    return view('admin.karyawan.edit');
});




Route::prefix('admin')->group(function () {

    // 1. Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // 2. CRUD Karyawan
    Route::resource('/karyawan', KaryawanController::class);

    // 3. Presensi
    Route::resource('/presensi', PresensiController::class)->only(['index', 'show']);
});
