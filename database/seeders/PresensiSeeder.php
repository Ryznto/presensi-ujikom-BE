<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Presensi;

class PresensiSeeder extends Seeder
{
    public function run(): void
    {
        Presensi::create([
            'karyawan_id' => 1,
            'tanggal' => now()->toDateString(),
            'jam_masuk' => '08:00:00',
            'jam_pulang' => '16:00:00',
            'foto_masuk' => 'masuk.jpg',
            'foto_pulang' => 'pulang.jpg',
            'latitude' => -6.2000000,
            'longitude' => 106.8166667,
            'status_absen' => 'tepat_waktu',
        ]);

        Presensi::create([
            'karyawan_id' => 1,
            'tanggal' => now()->subDay()->toDateString(),
            'jam_masuk' => '08:15:00',
            'jam_pulang' => '16:00:00',
            'foto_masuk' => 'masuk2.jpg',
            'foto_pulang' => 'pulang2.jpg',
            'latitude' => -6.2000000,
            'longitude' => 106.8166667,
            'status_absen' => 'terlambat',
        ]);
    }
}
