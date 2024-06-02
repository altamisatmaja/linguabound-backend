<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Remaja;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        if ($user->role === 'Remaja') {
            $token = $user->createToken('mobile', ['role:Remaja'])->plainTextToken;
        } elseif ($user->role === 'Parent') {
            $token = $user->createToken('mobile', ['role:Parent'])->plainTextToken;
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Anda tidak memiliki otorisasi'
            ]);
        }

        return response()->json([
            'status' => 'succes',
            'message' => 'Berhasil login',
            'token' => $token,
            'data' => $user,
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Remaja,Parent',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($user->role === 'Remaja') {
            Remaja::create([
                'user_id' => $user->id,
                'username' => $request->username,
                'exp' => 0,
                'star' => 0,
                'level' => 0,
            ]);
            $token = $user->createToken('mobile', ['role:Remaja'])->plainTextToken;
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil registrasi',
                'token' => $token,
                'data' => $user,
            ]);
        } elseif ($user->role === 'Parent') {
            Parent::create([
                'user_id' => $user->id,
                'nama_lengkap' => $request->name,
                'kode' => $request->kode,
            ]);
            $token = $user->createToken('mobile', ['role:Parent'])->plainTextToken;
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil registrasi',
                'token' => $token,
                'data' => $user,
            ]);
        }
    }

}
