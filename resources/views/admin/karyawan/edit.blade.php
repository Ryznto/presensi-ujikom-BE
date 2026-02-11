@extends('layouts.admin')

@section('content')
    {{-- HEADER --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Edit Karyawan</h1>
        <p class="text-slate-400 text-sm">
            Perbarui data karyawan
        </p>
    </div>

    {{-- FORM CARD --}}
    <div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 max-w-3xl">
        <form class="space-y-6">

            {{-- NIP --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    NIP
                </label>
                <input type="text" value="EMP-2024001" disabled
                    class="w-full px-4 py-2.5 rounded-lg bg-slate-800 border border-slate-700
                              text-slate-400 cursor-not-allowed">
            </div>

            {{-- NAMA --}}
            <div>
                <label class="block text-sm text-slate-400 mb-1">
                    Nama Lengkap
                </label>
                <input type="text" value="Budi Santoso"
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
                    <option>IT</option>
                    <option selected>HRD</option>
                    <option>Finance</option>
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
                    <option selected>Programmer</option>
                    <option>Staff HR</option>
                    <option>Admin</option>
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
                    <option selected>Pagi (08:00 - 16:00)</option>
                    <option>Siang (13:00 - 21:00)</option>
                    <option>Malam (21:00 - 05:00)</option>
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
                    <option selected>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>

            {{-- ACTION --}}
            <div class="flex gap-3 pt-6">
                {{-- Button Batal --}}
                <a href="/admin/karyawan"
                    class="flex-1 md:flex-none text-center px-6 py-2.5 rounded-lg bg-slate-200 hover:bg-slate-300 
              text-slate-700 transition-all duration-200 text-sm font-semibold border border-slate-300">
                    Batal
                </a>

                {{-- Button Update --}}
                <button type="submit"
                    class="flex-1 md:flex-none px-6 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 
                   text-white shadow-lg shadow-blue-900/20 transition-all duration-200 text-sm font-semibold">
                    Update Data
                </button>
            </div>

        </form>
    </div>
@endsection
