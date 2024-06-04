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

    public function submitExercise(Request $request, $bagianId, $subBagianId)
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


        $report = ReportExercise::where('remaja_id', $remaja->id)
                    ->where('bagian_id', $bagianId)
                    ->where('sub_bagian_id', $subBagianId)
                    ->first();

        if ($report) {
            $report->nilai = $totalNilai;
            $report->completed = $isCompleted;
            $remaja->exp += $totalNilai;
            $remaja->save();
            $report->save();
        } else {
            $report = new ReportExercise();
            $report->remaja_id = $remaja->id;
            $report->bagian_id = $bagianId;
            $report->sub_bagian_id = $subBagianId;
            $report->nilai = $totalNilai;
            $report->completed = true;
            $report->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Exercise submitted successfully',
            'nilai' => $totalNilai
        ]);
    }
}
