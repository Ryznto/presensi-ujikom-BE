<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::insert([
            [
                'nama_shift' => 'Shift Pagi',
                'jam_masuk'  => '08:00:00',
                'jam_pulang' => '17:00:00',
                'toleransi_terlambat' => 15,
                'is_active'  => true,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nama_shift' => 'Shift Siang',
                'jam_masuk'  => '13:00:00',
                'jam_pulang' => '21:00:00',
                'toleransi_terlambat' => 10,
                'is_active'  => true,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
