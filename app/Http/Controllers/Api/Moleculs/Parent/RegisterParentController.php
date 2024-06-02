<?php

namespace App\Http\Controllers\Api\Moleculs\Parent;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterParentController extends Controller
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
            'role' => 'Parent',
        ]);

        if ($user){
            $kode = $this->generateKodeOrangTua();
            $parent = Parents::create([
                'user_id' => $user->id,
                'nama_lengkap' => $request->nama_lengkap,
                'kode' => $kode,
            ]);

            $token = $user->createToken('mobile', ['role:Parent'])->plainTextToken;
            if ($parent){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil registrasi',
                    'token' => $token,
                    'data' => $user,
                ]);
            }
        }
    }

    private function generateKodeOrangTua() {
        $now = new \DateTime();
        return 'OT' . $now->format('YmdHis');
    }
}
