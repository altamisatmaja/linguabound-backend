<?php

namespace App\Http\Controllers\Api\Moleculs\Remaja;

use App\Http\Controllers\Controller;
use App\Models\Remaja;
use App\Models\Parents;
use Illuminate\Http\Request;

class LinkedAccountParentConroller extends Controller
{
    public function linkAccount(Request $request)
{
    $request->validate([
        'kode_orang_tua' => 'required|string',
    ]);

    $user = $request->user();

    $parent = Parents::where('kode', $request->kode_orang_tua)->first();

    if (!$parent) {
        return response()->json(['message' => 'Data orang tua tidak valid'], 404);
    }

    $remaja = Remaja::where('user_id', $user->id)->first();

    $remaja->kode_orang_tua = $request->kode_orang_tua;
    $remaja->orang_tua_id = $parent->id;
    $remaja->save();

    return response()->json(['message' => 'Akun orang tua berhasil ditautkan ke akun remaja']);
}

}
