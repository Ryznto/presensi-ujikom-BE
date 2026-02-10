<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    // tampilkan semua presensi
    public function index()
    {
        $presensis = Presensi::with('karyawan')
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('admin.presensi.index', compact('presensis'));
    }

    // detail presensi (opsional)
    public function show($id)
    {
        $presensi = Presensi::with('karyawan')->findOrFail($id);
        return view('admin.presensi.show', compact('presensi'));
    }
}
