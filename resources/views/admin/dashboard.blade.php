@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-bold ">Dashboard Admin</h1>
        <p class="text-slate-500 text-sm">Ringkasan data presensi karyawan hari ini.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        {{-- Total Karyawan --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
            <div class="bg-blue-500/10 p-3 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1z" />
                </svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 font-medium">Total Karyawan</p>
                <h3 class="text-2xl font-bold text-slate-800">124</h3>
            </div>
        </div>

        {{-- Hadir --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
            <div class="bg-green-500/10 p-3 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 font-medium">Hadir Hari Ini</p>
                <h3 class="text-2xl font-bold text-slate-800">110</h3>
            </div>
        </div>

        {{-- Terlambat --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
            <div class="bg-orange-500/10 p-3 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 font-medium">Terlambat</p>
                <h3 class="text-2xl font-bold text-slate-800">14</h3>
            </div>
        </div>

        {{-- Tidak Hadir --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
            <div class="bg-red-500/10 p-3 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.364 5.636l-12.728 12.728M6.343 5.636l12.728 12.728" />
                </svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 font-medium">Tidak Hadir</p>
                <h3 class="text-2xl font-bold text-slate-800">14</h3>
            </div>
        </div>
    </div>
@endsection
