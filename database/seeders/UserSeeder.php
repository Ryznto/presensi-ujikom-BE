<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ===== ADMIN / MANAGER =====
        User::create([
            'nip'      => 'ADM001',
            'password' => Hash::make('admin123'),
            'role'     => 'admin',
        ]);

        // ===== KARYAWAN =====
        User::create([
            'nip'      => 'KRY001',
            'password' => Hash::make('karyawan123'),
            'role'     => 'karyawan',
        ]);

        User::create([
            'nip'      => 'KRY002',
            'password' => Hash::make('karyawan123'),
            'role'     => 'karyawan',
        ]);
    }
}
