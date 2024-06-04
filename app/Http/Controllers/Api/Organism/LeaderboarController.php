<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
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
    $leaders = Remaja::with('user')->orderBy('exp', 'desc')->take(10)->get();

    $userPosition = $this->getUserPosition($request);

    return response()->json([
        'status' => 'success',
        'message' => 'Data leaderboard berhasil didapatkan',
        'data' => [
            'all' => $leaders,
            'position' => $userPosition
        ]
    ]);
}


    public function getLeadersFromMentor(Request $request)
    {
        $leaders = Remaja::orderBy('exp', 'desc')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data leaderboard berhasil didapatkan',
            'data' => $leaders
        ]);
    }

    public function getChildLeaders(Request $request)
    {
        $user = Auth::guard('api')->user();
        $children = Remaja::where('orang_tua_id', $user->id)->get();

        $leaders = Remaja::orderBy('exp', 'desc')->get();

        $childrenLeaders = $children->map(function ($child) use ($leaders) {
            return $this->getChildPosition($child, $leaders);
        });

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil didapat',
            'data' => [
                'all' => $leaders,
                'positions' => $childrenLeaders
            ]
        ]);
    }

    private function getChildPosition($child, $leaders)
    {
        $childPosition = $leaders->search(function ($leader) use ($child) {
            return $leader->id === $child->id;
        });

        return $childPosition !== false ? $childPosition + 1 : null;
    }
}
