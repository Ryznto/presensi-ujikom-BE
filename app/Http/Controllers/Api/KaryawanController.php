<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data karyawan',
            'data' => Karyawan::with(['divisi', 'jabatan', 'shift'])->get()
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail karyawan',
            'data' => Karyawan::with(['divisi', 'jabatan', 'shift'])->findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'    => 'required|exists:users,id',
            'nama'       => 'required|string|max:100',
            'divisi_id'  => 'required|exists:divisis,id',
            'jabatan_id' => 'required|exists:jabatans,id',
            'shift_id'   => 'required|exists:shifts,id',
            'status_aktif' => 'required|boolean',
        ]);

        $karyawan = Karyawan::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Karyawan berhasil dibuat',
            'data' => $karyawan
        ]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Karyawan berhasil diupdate',
            'data' => $karyawan
        ]);
    }

    public function destroy($id)
    {
        Karyawan::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Karyawan berhasil dihapus',
            'data' => null
        ]);
    }
}
