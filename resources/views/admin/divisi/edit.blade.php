@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-lg">
    <h1 class="text-2xl font-bold text-slate-100 mb-4">Edit Divisi</h1>

    <form action="{{ route('divisi.update', $divisi->id) }}" method="POST" class="bg-slate-800 p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama_divisi" class="block text-slate-200 mb-2">Nama Divisi</label>
            <input type="text" name="nama_divisi" id="nama_divisi" value="{{ $divisi->nama_divisi }}" class="w-full px-4 py-2 rounded bg-slate-700 text-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-slate-200 mb-2">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="w-full px-4 py-2 rounded bg-slate-700 text-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{ $divisi->deskripsi }}</textarea>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('divisi.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded">Batal</a>
            <button type="submit" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded">Update</button>
        </div>
    </form>
</div>
@endsection
