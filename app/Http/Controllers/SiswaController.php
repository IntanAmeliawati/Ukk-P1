<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = siswa::select('id', 'nisn', 'nama', 'alamat', 'no_telp', 'kelas_id', 'spps_id')->get();
        $spps = Spp::select('id', 'tahun', 'nominal')->get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siswa = siswa::select('id', 'nisn', 'nama', 'alamat', 'no_telp', 'kelas_id', 'spps_id')->get();
        $spps = Spp::select('id', 'tahun', 'nominal')->get();
        return view('siswa.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'kelas_id' => 'required',
            'spps_id' => 'required'
        ]);

        Siswa::create([
            'nisn' => $request -> nisn,
            'nis' => $request -> nis,
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp,
            'kelas_id' => $request -> kelas_id,
            'spps_id' => $request -> spps_id
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}