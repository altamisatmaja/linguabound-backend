<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Mentor;
use App\Models\Parents;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\SubBagian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserAuthController extends Controller
{
    public function logged(Request $request){
        $baseUrl = $request->root();
        $user = auth()->user();

        // $akun = null;

        if ($user->role === 'Remaja') {
            $akun = Remaja::where('user_id', $user->id)->first();
        } elseif ($user->role === 'Parent') {
            $akun = Parents::where('user_id', $user->id)->first();
        } else {
            $akun = Mentor::where('user_id', $user->id)->first();
        }

        $user['foto'] = $baseUrl.'/'.$user->foto;
        // dd($akun);
        $user['detail'] = $akun;

        return response()->json([
            'status' => 'success',
            'message' => 'Anda login',
            'data' => $user
        ]);
    }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // dd($request->all());

    $user = User::where('email', $request->email)->first();

    // if (!$user || !Hash::check($request->password, $user->password)) {
    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //     ]);
    // }

    if(!$user){
        return response()->json([
            'status' => 'failed',
            'message' => 'Akun tidak ditemukan'
        ], 401);
    }


    // $token = null;
    // $akun = null;

    if ($user->role === 'Remaja') {
        $token = $user->createToken('mobile', ['role:Remaja'])->plainTextToken;
        $akun = Remaja::where('user_id', $user->id)->first();
    } elseif ($user->role === 'Parent') {
        $token = $user->createToken('mobile', ['role:Parent'])->plainTextToken;
        $akun = Parents::where('user_id', $user->id)->first();
    } else {
        return response()->json([
            'status' => 'failed',
            'message' => 'You do not have authorization',
        ], 403);
    }

    $user->api_token = $token;
    $user->save();

    $user['detail'] = $akun;

    return response()->json([
        'status' => 'success',
        'message' => 'Login successful',
        'token' => $token,
        'data' => $user
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
            $remaja = Remaja::create([
                'user_id' => $user->id,
                'username' => $request->username,
                'exp' => 0,
                'star' => 0,
                'level' => 0,
            ]);
            $token = $user->createToken('mobile', ['role:Remaja'])->plainTextToken;
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

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful',
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = auth()->user();

        if (Hash::check($request->old_password, $user->password)) {
           return response()->json([
            'status' => 'failed',
            'message' => 'Harap masukkan password lama yang sesuai!'
           ], 401);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Password berhasil diubah'
        ]);
    }

}
