<?php

namespace App\Http\Controllers\Api\Moleculs\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Meet;
use Illuminate\Http\Request;

class MentorGMeetController extends Controller
{
    public function createMeet(Request $request)
    {

        $request->validate([
            'topik' => 'required|string',
            'deskripsi' => 'required|string',
            'jam_mulai' => 'required|date_format:Y-m-d H:i:s',
            'jam_berakhir' => 'required|date_format:Y-m-d H:i:s|after:jam_mulai',
            'tanggal' => 'required|date_format:Y-m-d',
            'link' => 'required|url',
            'materi' => 'required|file|mimes:pdf|max:2048',
            'total_remaja' => 'required|integer|min:1',
        ]);

        $materiPath = $request->file('materi')->storeAs('public/materi', $request->file('materi')->getClientOriginalName());

        $meet = new Meet();
        $meet->topik = $request->topik;
        $meet->deskripsi = $request->deskripsi;
        $meet->jam_mulai = $request->jam_mulai;
        $meet->jam_berakhir = $request->jam_berakhir;
        $meet->tanggal = $request->tanggal;
        $meet->link = $request->link;
        $meet->materi = $materiPath;
        $meet->total_remaja = $request->total_remaja;
        $meet->status = 'Belum dipublish';
        $meet->mentor_id = $request->user()->id;
        $meet->save();

        return response()->json(['message' => 'Kelas berhasil dibuat']);
    }

    public function publishMeet($meetId)
    {
        $meet = Meet::findOrFail($meetId);

        $meet->status = 'Sudah dipublish';
        $meet->save();

        return response()->json(['message' => 'Kelas berhasil dipublish']);
    }
}
