<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Pilihan;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\Soal;
use App\Models\SubBagian;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    public function getAssesment(Request $request){
        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $subBagian = SubBagian::find(5);
        if (!$subBagian) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Sub Bagian not found'
            ], 404);
        }

        $soals = Soal::where('sub_bagian_id', 5)->inRandomOrder()->take(5)->get();

        $soalExercise = [];
        foreach ($soals as $soal) {
            $pilihan = Pilihan::where('soal_id', $soal->id)->get();
            $soalData = [
                'soal' => $soal,
                'pilihan' => $pilihan
            ];
            array_push($soalExercise, $soalData);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil didapatkan',
            'data' => [
                'sub_bagian' => $subBagian,
                'data_soal' => $soalExercise
            ]
        ]);
    }

    public function submitAssesment(Request $request)
    {
        $request->validate([
            'soal_id' => 'required|array',
            'jawaban' => 'required|array',
        ]);

        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $soalIds = $request->input('soal_id');
        $jawaban = $request->input('jawaban');

        $totalNilai = 0;
        foreach ($soalIds as $index => $soalId) {
            $jawabanRemaja = $jawaban[$index];
            $pilihanBenar = Pilihan::where('soal_id', $soalId)->where('benar', true)->first();

            if ($jawabanRemaja == $pilihanBenar->id) {
                $totalNilai += $pilihanBenar->skor;
            }
        }

        $isCompleted = $totalNilai >= 100;

        if ($isCompleted) {
            for ($i = 1; $i <= 5; $i++) {
                ReportExercise::updateOrCreate(
                    [
                        'remaja_id' => $remaja->id,
                        'bagian_id' => 1,
                        'sub_bagian_id' => $i
                    ],
                    [
                        'nilai' => 100,
                        'completed' => true
                    ]
                );
            }

            $remaja->exp += 500;
        } else {
            $remaja->exp += $totalNilai;
        }

        $remaja->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Exercise submitted successfully',
            'nilai' => $totalNilai
        ]);
    }
}
