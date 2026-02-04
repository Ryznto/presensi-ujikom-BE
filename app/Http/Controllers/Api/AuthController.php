<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * LOGIN
     * Login menggunakan NIP + Password
     */
    public function login(Request $request)
    {
        // 1. Validasi input dari frontend
        $request->validate([
            'nip'      => 'required',
            'password' => 'required',
        ]);

        // 2. Attempt login ke tabel users (pakai NIP)
        if (!Auth::attempt([
            'nip' => $request->nip,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'nip' => ['NIP atau password salah'],
            ]);
        }

        // 3. Ambil user yang login
        $user = Auth::user();

        // 4. Buat token Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        // 5. Response ke frontend
        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'token'   => $token,
            'user'    => [
                'id'   => $user->id,
                'nip'  => $user->nip,
                'role' => $user->role,
            ],
        ]);
    }

    /**
     * LOGOUT
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout berhasil',
        ]);
    }

    /**
     * USER LOGIN SAAT INI
     */
    public function me(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => [
                'id'   => $request->user()->id,
                'nip'  => $request->user()->nip,
                'role' => $request->user()->role,
            ],
        ]);
    }
}
