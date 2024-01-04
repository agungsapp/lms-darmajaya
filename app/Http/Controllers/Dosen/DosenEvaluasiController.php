<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenEvaluasiController extends Controller
{
    protected $mkModel;
    public function __construct()
    {
        $this->mkModel = new MataKuliah();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mks = $this->mkModel->where('id_users', Auth::user()->id)->get();
        // dd($mks);
        $data = [
            'mks' => $mks,
        ];
        return view('dosen.evaluasi.index', $data);
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
    public function show(string $kode_mk)
    {
        //

        $mk = $this->mkModel->where('kode_mk', $kode_mk)->first();
        // dd($mk);
        $data = [
            'mk' => $mk,
        ];
        return view('dosen.evaluasi.show', $data);
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
