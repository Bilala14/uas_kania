<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data guru
        $nomor = 1;
        $guru = Guru::all();
        return view('Guru.index', compact('guru', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        return view('Guru.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $guru = new Guru;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->email = $request->email;
        $guru->bidang = $request->bidang;
        $guru->nohp = $request->nohp;
        $guru->save();

        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // menampilkan data detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // form edit
        $guru = Guru::find($id);
        return view('Guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $guru = Guru::find($id);
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->email = $request->email;
        $guru->bidang = $request->bidang;
        $guru->nohp = $request->nohp;
        $guru->save();

        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }
}
