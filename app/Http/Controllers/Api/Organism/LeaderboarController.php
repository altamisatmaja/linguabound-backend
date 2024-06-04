<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\Remaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboarController extends Controller
{
    public function getUserPosition(Request $request)
{
    $user = $request->user();

    $currentUser = Remaja::where('user_id', $user->id)->first();

    if (!$currentUser) {
        return null;
    }

    $leaders = Remaja::with('user')->orderBy('exp', 'desc')->get();

    $userPosition = $leaders->search(function ($leader) use ($currentUser) {
        return $leader->id === $currentUser->id;
    });

    return $userPosition !== false ? $userPosition + 1 : null;
}

public function getLeaders(Request $request)
{

    $baseUrl = $request->root();


    $leaders = Remaja::with('user')->orderBy('exp', 'desc')->take(10)->get();


    if ($leaders->isEmpty()) {

        return response()->json([
            'status' => 'error',
            'message' => 'No leaders found',
            'data' => []
        ], 404);
    }

    $leadersWithPhoto = $leaders->map(function ($leader) use ($baseUrl) {
        return [
            'id' => $leader->id,
            'name' => $leader->user->name,
            'exp' => $leader->exp,
            'star' => $leader->star,
            'foto' => asset('storage/storage/profile/'.$leader->user->foto)
        ];
    });

    $userPosition = $this->getUserPosition($request);

    return response()->json([
        'status' => 'success',
        'message' => 'Data berhasil didapatkan',
        'data' => [
            'leaders' => $leadersWithPhoto,
            'position' => $userPosition
        ]
    ]);
}


    public function getLeadersFromMentor(Request $request)
    {
        $baseUrl = $request->root();

        $leaders = Remaja::with('user')->orderBy('exp', 'desc')->get();

        $leadersWithPhoto = $leaders->map(function ($leader) use ($baseUrl) {
            return [
                'id' => $leader->id,
                'name' => $leader->user->name,
                'exp' => $leader->exp,
                'star' => $leader->star,
                'foto' => $baseUrl . '/' . $leader->user->foto
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => 'Data leaderboard berhasil didapatkan',
            'data' => $leadersWithPhoto
        ]);
    }

    public function getChildLeaders(Request $request)
{
        $baseUrl = $request->root();
        $user = auth()->user();

        $leaders = Remaja::with('user')->orderBy('exp', 'desc')->get();

        $leadersWithPhoto = $leaders->map(function ($leader) use ($baseUrl) {
            return [
                'id' => $leader->id,
                'name' => $leader->user->name,
                'exp' => $leader->exp,
                'star' => $leader->star,
                'foto' => $baseUrl . '/' . $leader->user->foto
            ];
        });

        $userPosition = $this->getChildPosition($request);

        return response()->json([
            'status' => 'success',
            'message' => 'Data leaderboard berhasil didapatkan',
            'data' => [
                'leaders' => $leadersWithPhoto,
                'position' => $userPosition
            ]
        ]);
}

public function getChildPosition(Request $request)
{
    $user = $request->user();

    $currentUsers = Parents::where('user_id', $user->id)->first();
    $currentUser = Remaja::where('orang_tua_id', $currentUsers->id)->first();
    // dd($currentUser);

    if (!$currentUser) {
        return null;
    }

    $leaders = Remaja::with('user')->orderBy('exp', 'desc')->get();

    $userPosition = $leaders->search(function ($leader) use ($currentUser) {
        return $leader->id === $currentUser->id;
    });

    return $userPosition !== false ? $userPosition + 1 : null;
}

}
