<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 min-h-screen flex items-center justify-center text-slate-100">

    <div class="w-full max-w-md px-6">
        {{-- CARD --}}
        <div class="bg-slate-950 border border-slate-800 rounded-2xl shadow-lg p-8">

            {{-- HEADER --}}
            <div class="mb-8 text-center">
                <div class="flex justify-center items-center gap-2 mb-2">
                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                    <h1 class="text-xl font-bold tracking-widest text-white">
                        ADMIN LOGIN
                    </h1>
                </div>
                <p class="text-sm text-slate-400">
                    Sistem Presensi Karyawan
                </p>
            </div>

            {{-- FORM --}}
            <form class="space-y-5">
                {{-- NIP --}}
                <div>
                    <label class="block text-sm text-slate-400 mb-1">
                        NIP
                    </label>
                    <input type="text" placeholder="Masukkan NIP"
                        class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700 
                               focus:outline-none focus:ring-2 focus:ring-blue-500
                               text-slate-100 placeholder:text-slate-500">
                </div>

                {{-- PASSWORD --}}
                <div>
                    <label class="block text-sm text-slate-400 mb-1">
                        Password
                    </label>
                    <input type="password" placeholder="Masukkan password"
                        class="w-full px-4 py-2.5 rounded-lg bg-slate-900 border border-slate-700 
                               focus:outline-none focus:ring-2 focus:ring-blue-500
                               text-slate-100 placeholder:text-slate-500">
                </div>

                {{-- BUTTON --}}

                <a href="{{ route('admin.dashboard') }}"
                    class="block w-full text-center py-2.5 rounded-lg
          bg-blue-600 hover:bg-blue-700
          transition font-semibold tracking-wide">
                    Masuk
                </a>

            </form>

            {{-- FOOTER --}}
            <div class="mt-6 text-center text-xs text-slate-500">
                © {{ date('Y') }} Sistem Presensi
            </div>
        </div>
    </div>

</body>

</html>
