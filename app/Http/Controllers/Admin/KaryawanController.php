<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    // tampilkan semua karyawan
    public function index()
    {
        $karyawans = Karyawan::with(['divisi', 'jabatan', 'shift'])->get();
        return view('admin.karyawan.index', compact('karyawans'));
    }

    // form tambah karyawan
    public function create()
    {
        return view('admin.karyawan.create');
    }

    // simpan karyawan
    public function store(Request $request)
    {
        $request->validate([
            'nip'  => 'required|unique:karyawan,nip',
            'nama' => 'required',
        ]);

        // 1. simpan karyawan
        $karyawan = Karyawan::create([
            'nip'  => $request->nip,
            'nama' => $request->nama,
        ]);

        // 2. buat akun login otomatis
        User::create([
            'nip'      => $request->nip,
            'password' => Hash::make('123456'),
            'role'     => 'karyawan',
        ]);

        return redirect()->back()->with('success', 'Karyawan berhasil ditambahkan');
    }

    // form edit
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.karyawan.edit', compact('karyawan'));
    }

    // update data
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->update([
            'nama' => $request->nama,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    // hapus karyawan
    public function destroy($id)
    {
        Karyawan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
