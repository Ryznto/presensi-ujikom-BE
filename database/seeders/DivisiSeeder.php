<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Divisi;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::insert([
            [
                'nama_divisi' => 'IT',
                'deskripsi'   => 'Divisi Teknologi Informasi',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama_divisi' => 'HRD',
                'deskripsi'   => 'Divisi Sumber Daya Manusia',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nama_divisi' => 'Operasional',
                'deskripsi'   => 'Divisi Operasional Perusahaan',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
