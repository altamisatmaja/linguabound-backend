<?php

namespace App\Http\Controllers\Api\Moleculs\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Meet;
use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorGMeetController extends Controller
{
    public function list(){
        $user = auth()->user();
        $mentor = Mentor::where('user_id', $user->id)->first();
        $meet = Meet::where('mentor_id', $mentor->id)->get();

        return response()->json([
            'success' => 'success',
            'message' => 'Data berhasil didapatkan',
            'data' => $meet
        ]);
    }
    public function createMeet(Request $request)
    {
        $request->validate([
            'topik' => 'required|string',
            'deskripsi' => 'required|string',
            'jam_mulai' => 'required|date_format:Y-m-d H:i:s',
            'jam_berakhir' => 'required|date_format:Y-m-d H:i:s|after:jam_mulai',
            'tanggal' => 'required|date_format:Y-m-d',
            'link' => 'required|string',
            'materi' => 'required|string',
            'total_remaja' => 'required|integer|min:1',
        ]);

        $user = $request->user();
        $mentor = Mentor::where('user_id', $user->id)->first();

        $meet = new Meet();
        $meet->topik = $request->topik;
        $meet->deskripsi = $request->deskripsi;
        $meet->jam_mulai = $request->jam_mulai;
        $meet->jam_berakhir = $request->jam_berakhir;
        $meet->tanggal = $request->tanggal;
        $meet->link = $request->link;
        $meet->materi = $request->materi;
        $meet->total_remaja = $request->total_remaja;
        $meet->status = 'Belum dipublish';
        $meet->mentor_id = $mentor->id;
        $meet->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Kelas berhasil dibuat'
        ]);
    }


    public function publishMeet($meetId)
    {
        $meet = Meet::findOrFail($meetId);

        $meet->status = 'Sudah dipublish';
        $meet->save();

        return response()->json([
            'statua' => 'success',
            'message' => 'Kelas berhasil dipublish'
        ]);
    }
}
