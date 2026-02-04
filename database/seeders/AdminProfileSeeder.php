<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminProfile;

class AdminProfileSeeder extends Seeder
{
    public function run(): void
    {
        AdminProfile::create([
            'user_id' => 1,
            'nama' => 'Admin Utama',
            'no_hp' => '081234567890',
            'jabatan' => 'HRD',
        ]);
    }
}
