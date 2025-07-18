<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    // Tampilkan semua data kelas
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    // Tampilkan form tambah data
    public function create()
    {
        return view('kelas.form');
    }

    // Simpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'kode_kelas' => 'required|unique:kelas,kode_kelas',
            'nama_kelas' => 'required',
        ]);

        Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect('/kelas')->with('success', 'Data kelas berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_kelas' => 'required|unique:kelas,kode_kelas,' . $id,
            'nama_kelas' => 'required',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect('/kelas')->with('success', 'Data kelas berhasil diperbarui!');
    }

    // Proses hapus data
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect('/kelas')->with('success', 'Data kelas berhasil dihapus!');
    }
}
