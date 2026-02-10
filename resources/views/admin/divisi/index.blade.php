@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-white">Data Divisi</h1>
    <a href="{{ route('divisi.create') }}" 
       class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition">
        + Tambah Divisi
    </a>
</div>

<div class="bg-slate-950 rounded-lg shadow p-4">
    <table class="min-w-full divide-y divide-slate-700">
        <thead>
            <tr class="text-left text-slate-400 uppercase text-xs">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Nama Divisi</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700 text-slate-300">
            @foreach($divisis as $index => $div)
            <tr>
                <td class="px-4 py-2">{{ $index + 1 }}</td>
                <td class="px-4 py-2">{{ $div->nama_divisi }}</td>
                <td class="px-4 py-2 flex gap-2">
                    <a href="{{ route('divisi.edit', $div->id) }}"
                       class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg text-sm transition">
                       Edit
                    </a>
                    <form action="{{ route('divisi.destroy', $div->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm transition"
                            onclick="return confirm('Hapus divisi {{ $div->nama_divisi }}?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
