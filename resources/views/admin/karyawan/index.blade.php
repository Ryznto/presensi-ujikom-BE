@extends('layouts.admin')

@section('content')
    {{-- HEADER --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold">Data Karyawan</h1>
            <p class="text-slate-400 text-sm">Kelola data karyawan perusahaan</p>
        </div>

        <a href="/admin/karyawan/create"
           class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 transition text-sm font-semibold">
            + Tambah Karyawan
        </a>
    </div>

    {{-- TABLE --}}
    <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-900 text-slate-400">
                <tr>
                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">NIP</th>
                    <th class="px-4 py-3 text-left">Nama</th>
                    <th class="px-4 py-3 text-left">Divisi</th>
                    <th class="px-4 py-3 text-left">Jabatan</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-800">
                {{-- DUMMY DATA --}}
                <tr class="hover:bg-slate-900 transition">
                    <td class="px-4 py-3">1</td>
                    <td class="px-4 py-3">2024001</td>
                    <td class="px-4 py-3 font-medium">Andi Saputra</td>
                    <td class="px-4 py-3">IT</td>
                    <td class="px-4 py-3">Programmer</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <!-- Tombol Edit -->
                        <a href="/admin/karyawan/edit"
                           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition text-sm font-medium">
                            Edit
                        </a>

                        <!-- Pemisah -->
                        <span class="text-slate-600">|</span>

                        <!-- Tombol Hapus -->
                        <a href="#"
                           class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition text-sm font-medium">
                            Hapus
                        </a>
                    </td>
                </tr>

                <tr class="hover:bg-slate-900 transition">
                    <td class="px-4 py-3">2</td>
                    <td class="px-4 py-3">2024002</td>
                    <td class="px-4 py-3 font-medium">Budi Santoso</td>
                    <td class="px-4 py-3">HRD</td>
                    <td class="px-4 py-3">Staff HR</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <!-- Tombol Edit -->
                        <a href="/admin/karyawan/edit"
                           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition text-sm font-medium">
                            Edit
                        </a>

                        <!-- Pemisah -->
                        <span class="text-slate-600">|</span>

                        <!-- Tombol Hapus -->
                        <a href="#"
                           class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition text-sm font-medium">
                            Hapus
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
