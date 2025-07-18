<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Guru;

class JadwalController extends Controller
{
    /**
     * Tampilkan semua data jadwal
     */
    public function index()
    {
        $jadwal = Jadwal::with(['kelas', 'guru'])->get();
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Tampilkan form tambah data
     */
    public function create()
    {
        $kelas = Kelas::all();
        $guru  = Guru::all();
        return view('jadwal.form', compact('kelas', 'guru'));
    }

    /**
     * Simpan data ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas_id'   => 'required|exists:kelas,id',
            'guru_id'    => 'required|exists:gurus,id', 
            'bidang'     => 'required|string',
            'hari'       => 'required|string',
            'jammasuk'   => 'required|date_format:H:i',
            'jamkeluar'  => 'required|date_format:H:i|after:jammasuk',
        ]);

        Jadwal::create([
            'kelas_id'   => $request->kelas_id,
            'guru_id'    => $request->guru_id,
            'bidang'     => $request->bidang,
            'hari'       => $request->hari,
            'jammasuk'   => $request->jammasuk,
            'jamkeluar'  => $request->jamkeluar,
        ]);

        return redirect('/jadwal')->with('success', 'Data jadwal berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $kelas  = Kelas::all();
        $guru   = Guru::all();
        return view('jadwal.edit', compact('jadwal', 'kelas', 'guru'));
    }

    /**
     * Proses update data
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas_id'   => 'required|exists:kelas,id',
            'guru_id'    => 'required|exists:gurus,id',
            'bidang'     => 'required|string',
            'hari'       => 'required|string',
            'jammasuk'   => 'required|date_format:H:i',
            'jamkeluar'  => 'required|date_format:H:i|after:jammasuk',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update([
            'kelas_id'   => $request->kelas_id,
            'guru_id'    => $request->guru_id,
            'bidang'     => $request->bidang,
            'hari'       => $request->hari,
            'jammasuk'   => $request->jammasuk,
            'jamkeluar'  => $request->jamkeluar,
        ]);

        return redirect('/jadwal')->with('success', 'Data jadwal berhasil diperbarui!');
    }

    /**
     * Proses hapus data
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect('/jadwal')->with('success', 'Data jadwal berhasil dihapus!');
    }
}
