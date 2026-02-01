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
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();

            $table->string('nama_shift'); // contoh: Shift Pagi, Shift Malam
            $table->time('jam_masuk');    // contoh: 08:00:00
            $table->time('jam_pulang');   // contoh: 17:00:00
            $table->integer('toleransi_terlambat')->default(0); // menit

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
