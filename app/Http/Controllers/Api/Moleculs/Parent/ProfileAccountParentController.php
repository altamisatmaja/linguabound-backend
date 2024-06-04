<?php

namespace App\Http\Controllers\Api\Moleculs\Parent;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileAccountParentController extends Controller
{
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();
        $parent = Parents::where('user_id', $user->id)->first();
        // dd($user);

        $user->name = $request->name;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/storage/profile');

            if ($user->foto) {
                Storage::delete($user->foto);
            }

            $user->foto = $fotoPath;
        }

        $parent->nama_lengkap = $request->name;
        $parent->save();
        $user->save();

        return response()->json(['message' => 'Profile updated successfully']);
    }
}
