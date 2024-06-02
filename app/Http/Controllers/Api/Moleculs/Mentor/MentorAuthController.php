<?php

namespace App\Http\Controllers\Api\Moleculs\Mentor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MentorAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $mentor = User::where('email', $request->email)->first();

        if (!$mentor || !Hash::check($request->password, $mentor->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        if ($mentor->role !== 'Mentor') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Anda tidak memiliki otorisasi'
            ]);
        }

        return response()->json([
            'status' => 'succes',
            'message' => 'Berhasil login',
            'token' => $mentor->createToken('mobile', ['role:Mentor'])->plainTextToken,
            'data' => $mentor,
        ]);
    }

}
