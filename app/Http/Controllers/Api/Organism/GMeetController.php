<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Meet;
use App\Models\MeetMember;
use Illuminate\Http\Request;

class GMeetController extends Controller
{
    public function joinMeet(Request $request)
    {
        $request->validate([
            'meet_id' => 'required|integer',
            'remaja_id' => 'required|integer',
        ]);

        $meetId = $request->input('meet_id');
        $remajaId = $request->input('remaja_id');

        $meet = Meet::findOrFail($meetId);

        $alreadyJoined = MeetMember::where('meet_id', $meetId)
            ->where('remaja_id', $remajaId)
            ->exists();

        if ($alreadyJoined) {
            return response()->json(['message' => 'Remaja sudah terdaftar dalam kelas ini', 'meet_id' => $meetId]);
        }

        $jumlahRemajaTerdaftar = MeetMember::where('meet_id', $meetId)->count();

        if ($jumlahRemajaTerdaftar >= $meet->total_remaja) {
            return response()->json(['message' => 'Kelas sudah penuh, tidak bisa bergabung'], 400);
        }

        $meetMember = new MeetMember();
        $meetMember->meet_id = $meetId;
        $meetMember->remaja_id = $remajaId;
        $meetMember->save();

        return response()->json(['message' => 'Remaja berhasil bergabung dalam kelas', 'meet_id' => $meetId]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
