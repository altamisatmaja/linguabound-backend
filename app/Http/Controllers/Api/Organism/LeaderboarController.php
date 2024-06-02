<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Remaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getUserPosition()
    {
        $user = Auth::guard('api')->user();

        $currentUser = Remaja::where('user_id', $user->id)->first();

        if (!$currentUser) {
            return null;
        }

        $leaders = Remaja::orderBy('exp', 'desc')->get();

        $userPosition = $leaders->search(function ($leader) use ($currentUser) {
            return $leader->id === $currentUser->id;
        });

        return $userPosition !== false ? $userPosition + 1 : null;
    }


public function getLeaders(Request $request)
{
    $leaders = Remaja::orderBy('exp', 'desc')->take(10);

    $userPosition = $this->getUserPosition();

    return response()->json([
        'status' => 'success',
        'message' => 'Data leaderboard berhasil didapatkan',
        'data' => [
            'all' => $leaders,
            'position' => $userPosition
        ]
    ]);
}



    public function getChildLeaders(Request $request)
    {
        $user = $request->user();

        $children = Remaja::where('orang_tua_id', $user->id)->get();

        $childrenLeaders = [];

        foreach ($children as $child) {
            $childPosition = $this->getChildPosition($child);

            $childData = [
                'child_name' => $child->nama_orang_tua,
                'position' => $childPosition
            ];

            array_push($childrenLeaders, $childData);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil didapat',
            'data' => $childrenLeaders
        ]);
    }

    private function getChildPosition($child)
    {
        $leaders = Remaja::orderBy('exp', 'desc')->get();

        $childPosition = $leaders->search(function ($leader) use ($child) {
            return $leader->id === $child->id;
        });

        $childPosition += 1;

        return $childPosition;
    }
}
