<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Pilihan;
use App\Models\ReportExercise;
use App\Models\Soal;
use App\Models\SubBagian;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getExercise(Request $request)
    {
        $bagians = Bagian::all();
        $exercise = [];

        foreach ($bagians as $bagian) {
            $subBagians = SubBagian::where('bagian_id', $bagian->id)->get();
            $subBagianExercise = [];

            foreach ($subBagians as $subBagian) {
                $soals = Soal::where('sub_bagian_id', $subBagian->id)->inRandomOrder()->take(5)->get();
                $soalExercise = [];

                foreach ($soals as $soal) {
                    $pilihan = Pilihan::where('soal_id', $soal->id)->get();
                    $soalData = [
                        'soal' => $soal,
                        'pilihan' => $pilihan
                    ];
                    array_push($soalExercise, $soalData);
                }

                $subBagianData = [
                    'sub_bagian' => $subBagian,
                    'soal' => $soalExercise
                ];
                array_push($subBagianExercise, $subBagianData);
            }

            $exerciseData = [
                'bagian' => $bagian,
                'sub_bagian' => $subBagianExercise
            ];

            array_push($exercise, $exerciseData);
        }

        return response()->json(['exercise' => $exercise]);
    }

    public function submitExercise(Request $request, $bagianId, $subBagianId)
    {
        $request->validate([
            'soal_id' => 'required|array',
            'jawaban' => 'required|array',
        ]);

        $remaja = $request->user();

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

        $report = new ReportExercise();
        $report->remaja_id = $remaja->id;
        $report->bagian_id = $bagianId;
        $report->sub_bagian_id = $subBagianId;
        $report->nilai = $totalNilai;
        $report->completed = true;
        $report->save();

        return response()->json(['nilai' => $totalNilai]);
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
