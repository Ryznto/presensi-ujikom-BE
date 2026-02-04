<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IzinCuti;

class IzinCutiSeeder extends Seeder
{
    public function run(): void
    {
        IzinCuti::create([
            'karyawan_id' => 1,
            'tanggal_mulai' => '2026-02-05',
            'tanggal_selesai' => '2026-02-07',
            'jenis' => 'cuti',
            'alasan' => 'Acara keluarga',
            'status' => 'pending',
        ]);

        IzinCuti::create([
            'karyawan_id' => 1,
            'tanggal_mulai' => '2026-01-20',
            'tanggal_selesai' => '2026-01-20',
            'jenis' => 'izin',
            'alasan' => 'Sakit',
            'status' => 'approved',
        ]);
    }
}
