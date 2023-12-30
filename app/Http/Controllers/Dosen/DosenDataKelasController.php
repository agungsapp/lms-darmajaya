<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Hari;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\Alert;

class DosenDataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data = [
            'kodemk' => Matakuliah::generateKodeMk(),
            'hari' => Hari::all(),
            'mks' => MataKuliah::all()
        ];

        // dd($data['kodemk']);

        return view('dosen.data_kelas.index', $data);
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

        $data = [
            'kode_mk' => $request->kode,
            'name' => ucwords($request->name),
            'id_users' => $request->id_dosen,
        ];

        MataKuliah::create($data);

        alert()->success('Berhasil !', 'berhasil menambahkan data kelas !');
        return redirect()->back();
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
