<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Meet;
use App\Models\MeetMember;
use App\Models\Remaja;
use Illuminate\Http\Request;

class GMeetController extends Controller
{
    public function joinMeet(Request $request, $meet_id)
    {
        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json(['message' => 'Unauthorized access'], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();
        $remajaId = $remaja->id;

        $meet = Meet::findOrFail($meet_id);

        $alreadyJoined = MeetMember::where('meet_id', $meet_id)
            ->where('remaja_id', $remajaId)
            ->exists();

        if ($alreadyJoined) {
            return response()->json(['message' => 'Remaja sudah terdaftar dalam kelas ini', 'meet_id' => $meet_id]);
        }

        $jumlahRemajaTerdaftar = MeetMember::where('meet_id', $meet_id)->count();

        if ($jumlahRemajaTerdaftar >= $meet->total_remaja) {
            return response()->json(['message' => 'Kelas sudah penuh, tidak bisa bergabung'], 400);
        }

        $meetMember = new MeetMember();
        $meetMember->meet_id = $meet_id;
        $meetMember->remaja_id = $remajaId;
        $meetMember->save();

        $remaja->star += 1;
        $remaja->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Remaja berhasil bergabung dalam kelas',
            'data' => $meet_id
        ]);
    }
}
