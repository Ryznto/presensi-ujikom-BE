<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Shift;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::where('role', 'karyawan')->get();

        $divisi  = Divisi::where('nama_divisi', 'IT')->first();
        $jabatan = Jabatan::where('nama_jabatan', 'Programmer')->first();
        $shift   = Shift::where('nama_shift', 'Shift Pagi')->first();

        foreach ($users as $index => $user) {
            Karyawan::create([
                'user_id'      => $user->id,
                'nama'         => 'Karyawan ' . ($index + 1),
                'divisi_id'    => $divisi->id,
                'jabatan_id'   => $jabatan->id,
                'shift_id'     => $shift->id,
                'status_aktif' => true,
            ]);
        }
    }
}
