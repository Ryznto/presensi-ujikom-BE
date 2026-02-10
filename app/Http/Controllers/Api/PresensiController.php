<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Presensi;
use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * ABSEN MASUK
     */
    public function absenMasuk(Request $request)
    {
        $user = $request->user();

        // ambil data karyawan + shift
        $karyawan = Karyawan::with('shift')
            ->where('user_id', $user->id)
            ->firstOrFail();

        $today = Carbon::today();

        // cek sudah absen atau belum
        $sudahAbsen = Presensi::where('karyawan_id', $karyawan->id)
            ->where('tanggal', $today)
            ->first();

        if ($sudahAbsen) {
            return response()->json([
                'message' => 'Anda sudah absen hari ini'
            ], 400);
        }

        $now = Carbon::now();

        // hitung keterlambatan
        $jamMasukShift = Carbon::createFromTimeString($karyawan->shift->jam_masuk);
        $batasTelat = $jamMasukShift->addMinutes($karyawan->shift->toleransi_terlambat);

        $status = $now->gt($batasTelat) ? 'terlambat' : 'tepat_waktu';

        $presensi = Presensi::create([
            'karyawan_id' => $karyawan->id,
            'tanggal'     => $today,
            'jam_masuk'   => $now->format('H:i:s'),
            'latitude'    => $request->latitude,
            'longitude'   => $request->longitude,
            'foto_masuk'  => $request->foto_masuk,
            'status_absen'=> $status,
        ]);

        return response()->json([
            'message' => 'Absen masuk berhasil',
            'data'    => $presensi
        ]);
    }

    /**
     * ABSEN PULANG
     */
    public function absenPulang(Request $request)
    {
        $user = $request->user();

        $karyawan = Karyawan::where('user_id', $user->id)->firstOrFail();

        $today = Carbon::today();

        $presensi = Presensi::where('karyawan_id', $karyawan->id)
            ->where('tanggal', $today)
            ->firstOrFail();

        if ($presensi->jam_pulang) {
            return response()->json([
                'message' => 'Anda sudah absen pulang'
            ], 400);
        }

        $presensi->update([
            'jam_pulang'  => Carbon::now()->format('H:i:s'),
            'foto_pulang' => $request->foto_pulang,
        ]);

        return response()->json([
            'message' => 'Absen pulang berhasil',
            'data'    => $presensi
        ]);
    }

    /**
     * PRESENSI HARI INI
     */
    public function hariIni(Request $request)
    {
        $karyawan = Karyawan::where('user_id', $request->user()->id)->first();

        $presensi = Presensi::where('karyawan_id', $karyawan->id)
            ->where('tanggal', Carbon::today())
            ->first();

        return response()->json($presensi);
    }

    /**
     * RIWAYAT PRESENSI
     */
    public function riwayat(Request $request)
    {
        $karyawan = Karyawan::where('user_id', $request->user()->id)->first();

        $presensis = Presensi::where('karyawan_id', $karyawan->id)
            ->orderBy('tanggal', 'desc')
            ->get();

        return response()->json($presensis);
    }
}
