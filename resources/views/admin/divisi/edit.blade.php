@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Divisi</h1>
        <p class="text-slate-500 text-sm">Ubah nama unit kerja yang sudah terdaftar</p>
    </div>

    <div class="max-w-2xl bg-white border border-slate-200 rounded-2xl shadow-sm p-8">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Nama Divisi</label>
                    <input type="text" name="nama_divisi" value="Teknologi Informasi"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition outline-none text-sm font-semibold">
                </div>
            </div>

            <div class="flex gap-3 pt-8">
                <button type="button" onclick="window.location.href='/admin/divisi'"
                    class="w-32 px-6 py-2.5 rounded-lg bg-slate-200 hover:bg-slate-300 
               text-slate-700 transition-all duration-200 text-sm font-semibold border border-slate-300">
                    Batal
                </button>

                <button type="submit"
                    class="w-32 px-6 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 
               text-white shadow-lg shadow-blue-900/20 transition-all duration-200 text-sm font-semibold border border-blue-600">
                    Update
                </button>
            </div>

        </form>
    </div>
@endsection
