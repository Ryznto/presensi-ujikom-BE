@extends('layouts.admin')

@section('content')
    {{-- HEADER --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Tambah Karyawan</h1>
        <p class="text-slate-400 text-sm">
            Form input data karyawan baru
        </p>
    </div>

    {{-- FORM CARD --}}
    <div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 max-w-3xl">
        <form class="space-y-6">

            {{-- NIP (AUTO GENERATE) --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    NIP
                </label>
                <input type="text"
                       value="Auto Generate oleh Sistem"
                       disabled
                       class="w-full px-4 py-2.5 rounded-lg bg-slate-800 border border-slate-700
                              text-slate-400 cursor-not-allowed">
            </div>

            {{-- NAMA --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    Nama Lengkap
                </label>
                <input type="text" placeholder="Masukkan nama lengkap"
                    class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           text-slate-100">
            </div>

            {{-- DIVISI --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    Divisi
                </label>
                <select
                    class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           text-slate-100">
                    <option value="">Pilih Divisi</option>
                    <option value="1">IT</option>
                    <option value="2">HRD</option>
                    <option value="3">Finance</option>
                </select>
            </div>

            {{-- JABATAN --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    Jabatan
                </label>
                <select
                    class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           text-slate-100">
                    <option value="">Pilih Jabatan</option>
                    <option value="1">Programmer</option>
                    <option value="2">Staff HR</option>
                    <option value="3">Admin</option>
                </select>
            </div>

            {{-- SHIFT --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    Shift Kerja
                </label>
                <select
                    class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           text-slate-100">
                    <option value="">Pilih Shift</option>
                    <option value="1">Pagi (08:00 - 16:00)</option>
                    <option value="2">Siang (13:00 - 21:00)</option>
                    <option value="3">Malam (21:00 - 05:00)</option>
                </select>
            </div>

            {{-- STATUS --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    Status
                </label>
                <select
                    class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           text-slate-100">
                    <option value="">Pilih Status</option>
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
            </div>

            {{-- ACTION --}}
            <div class="flex gap-3 pt-4">
                <a href="/admin/karyawan"
                   class="px-4 py-2 rounded-lg bg-slate-700 hover:bg-slate-600
                          transition text-sm font-medium">
                    Batal
                </a>

                <button type="submit"
                        class="px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700
                               transition text-sm font-semibold">
                    Simpan
                </button>
            </div>

        </form>
    </div>
@endsection
