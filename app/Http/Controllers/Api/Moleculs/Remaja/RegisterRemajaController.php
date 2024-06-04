<?php

namespace App\Http\Controllers\Api\Moleculs\Remaja;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\SubBagian;
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

            $bagian_ids = Bagian::all();
            foreach ($bagian_ids as $bagian) {
                $sub_bagian_ids = SubBagian::where('bagian_id', $bagian->id)->get();
                foreach ($sub_bagian_ids as $sub_bagian) {
                    ReportExercise::create([
                        'remaja_id' => $remaja->id,
                        'bagian_id' => $bagian->id,
                        'sub_bagian_id' => $sub_bagian->id,
                        'nilai' => 0,
                        'completed' => 0,
                    ]);
                }
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
