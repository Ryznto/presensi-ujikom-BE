@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Data Divisi</h1>
            <p class="text-slate-500 text-sm">Daftar unit kerja perusahaan</p>
        </div>

        <a href="/admin/divisi/create"
            class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-200
                  transition text-sm font-bold text-white flex items-center gap-2">
            <span>+</span> Tambah Divisi
        </a>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 border-b border-slate-200 text-slate-600">
                <tr>
                    <th class="px-6 py-4 font-bold uppercase text-[10px] tracking-wider w-16">No</th>
                    <th class="px-6 py-4 font-bold uppercase text-[10px] tracking-wider">Nama Divisi</th>
                    <th class="px-6 py-4 font-bold uppercase text-[10px] tracking-wider">Jumlah Karyawan</th>
                    <th class="px-6 py-4 font-bold uppercase text-[10px] tracking-wider text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 font-medium text-slate-400">01</td>
                    <td class="px-6 py-4 font-bold text-slate-800 uppercase tracking-tight">Teknologi Informasi</td>
                    <td class="px-6 py-4">
                        <span class="bg-slate-100 text-slate-600 px-2 py-1 rounded-md text-xs font-bold">12 Orang</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center gap-3">

                            <button type="button" onclick="window.location.href='/admin/divisi/edit'"
                                class="px-3 py-1 rounded-md bg-amber-500 hover:bg-amber-600 
               text-white text-[11px] font-bold uppercase tracking-tighter 
               transition-all duration-200">
                                Edit
                            </button>

                            <button type="button"
                                class="px-3 py-1 rounded-md bg-red-500 hover:bg-red-600 
               text-white text-[11px] font-bold uppercase tracking-tighter 
               transition-all duration-200">
                                Hapus
                            </button>

                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
