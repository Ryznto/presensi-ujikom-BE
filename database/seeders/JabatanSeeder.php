<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jabatan;
use App\Models\Divisi;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil divisi berdasarkan nama
        $it = Divisi::where('nama_divisi', 'IT')->first();
        $hrd = Divisi::where('nama_divisi', 'HRD')->first();
        $operasional = Divisi::where('nama_divisi', 'Operasional')->first();

        // ===== IT =====
        Jabatan::create([
            'nama_jabatan' => 'Programmer',
            'deskripsi'    => 'Mengembangkan dan memelihara sistem',
            'divisi_id'    => $it->id,
        ]);

        Jabatan::create([
            'nama_jabatan' => 'UI/UX Designer',
            'deskripsi'    => 'Merancang tampilan dan pengalaman pengguna',
            'divisi_id'    => $it->id,
        ]);

        // ===== HRD =====
        Jabatan::create([
            'nama_jabatan' => 'HR Manager',
            'deskripsi'    => 'Mengelola sumber daya manusia',
            'divisi_id'    => $hrd->id,
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Staff HR',
            'deskripsi'    => 'Administrasi dan pengelolaan data karyawan',
            'divisi_id'    => $hrd->id,
        ]);

        // ===== OPERASIONAL =====
        Jabatan::create([
            'nama_jabatan' => 'Supervisor Operasional',
            'deskripsi'    => 'Mengawasi kegiatan operasional harian',
            'divisi_id'    => $operasional->id,
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Staff Operasional',
            'deskripsi'    => 'Menjalankan operasional harian',
            'divisi_id'    => $operasional->id,
        ]);
    }
}
