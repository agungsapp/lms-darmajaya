<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\BankSoalModel;
use App\Models\EvaluasiModel;
use Illuminate\Http\Request;


class StudentEvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $evaluasi = EvaluasiModel::find($id);
        $soal = $evaluasi->bankSoal;

        // Mengonversi Collection ke Array
        $soalArray = $soal->all();

        // implementasi algorithm fisher yates mulai
        for ($i = count($soalArray) - 1; $i > 0; $i--) {
            $j = rand(0, $i);
            $temp = $soalArray[$i];
            $soalArray[$i] = $soalArray[$j];
            $soalArray[$j] = $temp;
        }
        // end pengacakan

        $data = [
            'eval' => $evaluasi,
            'soal' => $soalArray,
        ];
        // dd($data['soal']);

        return view('student.evaluasi.index', $data);
    }


    public function koreksiJawaban(Request $request)
    {
        $jawabanUser = $request->input('jawaban'); // Tangkap jawaban dari request

        $skor = 0;
        foreach ($jawabanUser as $idSoal => $jawaban) {
            $soal = BankSoalModel::find($idSoal); // Dapatkan soal berdasarkan ID

            if ($soal && $soal->kunci == $jawaban) {
                $skor++; // Tambahkan skor jika jawaban benar
            }
        }

        // Hitung persentase skor
        $totalSoal = count($jawabanUser);
        $persentaseSkor = ($skor / $totalSoal) * 100;

        // Kirim feedback ke view, contoh: tampilkan skor
        return view('student.evaluasi.hasil', ['skor' => $persentaseSkor]);
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
