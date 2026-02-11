<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\PresensiController;

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Karyawan (UI Only)
    Route::get('/karyawan', function () {
        return view('admin.karyawan.index');
    })->name('karyawan.index');

    Route::get('/karyawan/create', function () {
        return view('admin.karyawan.create');
    })->name('karyawan.create');

    Route::get('/karyawan/edit', function () {
        return view('admin.karyawan.edit');
    })->name('karyawan.edit');

    // Divisi (UI Only)
    Route::get('/divisi', function () {
        return view('admin.divisi.index');
    })->name('divisi.index');

    Route::get('/divisi/create', function () {
        return view('admin.divisi.create');
    })->name('divisi.create');

    Route::get('/divisi/edit', function () {
        return view('admin.divisi.edit');
    })->name('divisi.edit');

    // Presensi (UI Only)
    Route::get('/presensi', function () {
        return view('admin.presensi.index');
    })->name('presensi.index');

});
