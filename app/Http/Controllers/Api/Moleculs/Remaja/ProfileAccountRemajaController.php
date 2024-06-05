<?php

namespace App\Http\Controllers\Api\Moleculs\Remaja;

use App\Http\Controllers\Controller;
use App\Models\Remaja;
use Hash;
use Illuminate\Http\Request;
use Storage;

class ProfileAccountRemajaController extends Controller
{
    public function updateProfile(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        // 'username' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    $user = auth()->user();
    $remaja = Remaja::where('user_id', $user->id)->first();

    $user->name = $request->name;

    // if ($request->filled('password')) {
    //     $user->password = Hash::make($request->password);
    // }

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoName = time() . '.' . $foto->getClientOriginalExtension();
        $foto->storeAs('public/storage/profile', $fotoName);

        // if ($user->foto) {
        //     Storage::delete('public/storage/profile/' . $user->foto);
        // }

        $user->foto = $fotoName;
    }

    // $remaja->username = $request->username;
    // $remaja->save();
    $user->save();

    return response()->json(['message' => 'Profile updated successfully']);
}


}
