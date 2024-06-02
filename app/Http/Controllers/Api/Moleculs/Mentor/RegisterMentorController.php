<?php

namespace App\Http\Controllers\Api\Moleculs\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterMentorController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Mentor',
        ]);

        if ($user) {
            $mentor = Mentor::create([
                'user_id' => $user->id,
                'nama_lengkap' => $user->name,
                'gelar' => $request->gelar,
                'riwayat_pendidikan_terakhir' => $request->riwayat_pendidikan_terakhir,
            ]);

            $token = $user->createToken('mobile', ['role:Mentor'])->plainTextToken;
            if ($mentor) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil registrasi',
                    'token' => $token,
                    'data' => $user,
                ]);
            }
        }
    }
}
