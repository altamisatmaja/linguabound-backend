<?php

namespace App\Http\Controllers\Api\Moleculs\Parent;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Parents;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\SubBagian;
use Illuminate\Http\Request;

class ReportExerciseParentController extends Controller
{
    public function report(Request $request){
        $user = $request->user();

        if ($user->role !== 'Parent') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $parent = Parents::where('user_id', $user->id)->first();

        $remaja = Remaja::where('orang_tua_id', $parent->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $reportExercises = ReportExercise::where('remaja_id', $remaja->id)
                            ->where('completed', true)
                            ->get();

        $reportExercises->transform(function ($reportExercise) {
            $reportExercise->nama_bagian = Bagian::where('id', $reportExercise->bagian_id)->value('nama_bagian');
            $reportExercise->nama_sub_bagian = SubBagian::where('id', $reportExercise->sub_bagian_id)->value('nama_sub_bagian');

            unset($reportExercise->created_at, $reportExercise->updated_at);
            return $reportExercise;
        });

        $data['history'] = $reportExercises;
        $data['star'] = $remaja->star;
        $data['exp'] = $remaja->exp;
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
