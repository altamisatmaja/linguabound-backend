<?php

namespace App\Http\Controllers\Api\Moleculs\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
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

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        if ($user->role !== 'Mentor') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Anda tidak memiliki otorisasi'
            ]);
        }

        $mentor = Mentor::where('user_id', $user->id)->first();
        $token = $user->createToken('mobile', ['role:Mentor'])->plainTextToken;

        $user->api_token = $token;
        $user->save();
        $user['detail'] = $mentor;

        return response()->json([
            'status' => 'succes',
            'message' => 'Berhasil login',
            'token' => $user->createToken('mobile', ['role:Mentor'])->plainTextToken,
            'data' => $user,
        ]);
    }

}
