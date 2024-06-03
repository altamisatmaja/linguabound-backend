<?php

namespace App\Http\Controllers\Api\Moleculs\Remaja;

use App\Http\Controllers\Controller;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterRemajaController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Remaja',
        ]);

        if ($user){
            $remaja = Remaja::create([
                'user_id' => $user->id,
                'username' => $request->username,
                'exp' => 0,
                'star' => 0,
                'level' => 0,
            ]);

            for ($i=1; $i < 4; $i++) {
                $reportexercise = ReportExercise::create([
                    'remaja_id' => $remaja->id,
                    ''
                ]);
            }

            $token = $user->createToken('mobile', ['role:Remaja'])->plainTextToken;
            if ($remaja){
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
