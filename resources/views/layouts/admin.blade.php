<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-slate-100 min-h-screen">

    <div class="flex min-h-screen">

<aside class="w-64 bg-slate-950 border-r border-slate-800 flex flex-col">
    {{-- LOGO --}}
    <div class="px-6 py-5 border-b border-slate-800">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-blue-400 to-cyan-400"></div>
            <div
                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300 text-base font-extrabold tracking-widest">
                ADMIN PANEL
            </div>
        </div>
        <div class="text-xs text-slate-400 mt-1 tracking-wide">
            Presensi & Data Karyawan
        </div>
    </div>

    {{-- MENU --}}
    <nav class="flex-1 p-4 space-y-1">
        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
            class="block px-4 py-2 rounded-lg font-medium transition
            {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Dashboard
        </a>

        <div class="pt-4 pb-2 text-xs font-semibold text-slate-500 uppercase px-4">
            Manajemen SDM
        </div>

        {{-- Data Karyawan --}}
        <a href="/admin/karyawan"
            class="block px-4 py-2 rounded-lg transition
            {{ request()->is('admin/karyawan*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Data Karyawan
        </a>

        {{-- Data Divisi --}}
        <a href="/admin/divisi"
            class="block px-4 py-2 rounded-lg transition
            {{ request()->is('admin/divisi*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Data Divisi
        </a>

        {{-- Data Jabatan --}}
        <a href="/admin/jabatan"
            class="block px-4 py-2 rounded-lg transition
            {{ request()->is('admin/jabatan*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Data Jabatan
        </a>

        <div class="pt-4 pb-2 text-xs font-semibold text-slate-500 uppercase px-4">
            Laporan
        </div>

        {{-- Laporan Presensi --}}
        <a href="/admin/presensi"
            class="block px-4 py-2 rounded-lg transition
            {{ request()->is('admin/presensi*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Laporan Presensi
        </a>
    </nav>
</aside>


        {{-- CONTENT --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</body>

</html>
