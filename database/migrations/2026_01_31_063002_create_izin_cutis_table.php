<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('izin_cutis', function (Blueprint $table) {
            // Primary key
            $table->id();

            // Relasi ke tabel karyawan
            // Setiap pengajuan izin/cuti pasti milik satu karyawan
            $table->foreignId('karyawan_id')
                  ->constrained('karyawans')
                  ->onDelete('cascade');

            // Jenis pengajuan
            // izin  : tidak masuk satu / beberapa hari
            // sakit : izin karena sakit
            // cuti  : cuti tahunan
            $table->enum('jenis', ['izin', 'sakit', 'cuti']);

            // Tanggal mulai izin/cuti
            $table->date('tanggal_mulai');

            // Tanggal selesai izin/cuti
            $table->date('tanggal_selesai');

            // Alasan atau keterangan tambahan
            $table->text('keterangan')->nullable();

            // Status pengajuan
            // pending  : menunggu persetujuan admin
            // approved : disetujui
            // rejected : ditolak
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');

            // Waktu data dibuat
            // Digunakan untuk riwayat pengajuan
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_cutis');
    }
};
