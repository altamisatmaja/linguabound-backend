<?php

namespace App\Http\Controllers\Api\Moleculs\Remaja;

use App\Http\Controllers\Controller;
use App\Models\Remaja;
use Illuminate\Http\Request;

class LinkedAccountParentConroller extends Controller
{
    public function linkAccount(Request $request)
    {
        $request->validate([
            'nama_orang_tua' => 'required|string',
            'kode_orang_tua' => 'required|string',
        ]);

        $user = $request->user();

        $parent = Parent::where('nama_lengkap', $request->nama_orang_tua)
                        ->where('kode', $request->kode_orang_tua)
                        ->first();

        if (!$parent) {
            return response()->json(['message' => 'Data orang tua tidak valid'], 404);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();
        $remaja->nama_orang_tua = $parent->nama_lengkap;
        $remaja->orang_tua_id = $parent->id;
        $remaja->save();

        return response()->json(['message' => 'Akun orang tua berhasil ditautkan ke akun remaja']);
    }

}
