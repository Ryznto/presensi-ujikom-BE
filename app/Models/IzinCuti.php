<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IzinCuti extends Model
{
    /**
     * Nama tabel (opsional tapi aman)
     */
    protected $table = 'izin_cutis';

    /**
     * Kolom yang boleh diisi
     * HARUS sesuai migration
     */
    protected $fillable = [
        'karyawan_id',
        'jenis',
        'tanggal_mulai',
        'tanggal_selesai',
        'keterangan',
        'status',
    ];

    /**
     * Relasi ke karyawan
     * Satu izin/cuti dimiliki satu karyawan
     */
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
