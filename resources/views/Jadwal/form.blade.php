@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Jadwal</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/jadwal') }}">
                        @csrf

                        <!-- Kelas -->
                        <div class="mb-3">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select name="kelas_id" class="form-control" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Guru -->
                        <div class="mb-3">
                            <label for="guru_id" class="form-label">Guru</label>
                            <select name="guru_id" class="form-control" required>
                                <option value="">-- Pilih Guru --</option>
                                @foreach ($guru as $g)
                                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bidang, Hari, Jam -->
                        <div class="mb-3">
                            <label class="form-label">Bidang</label>
                            <input type="text" name="bidang" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hari</label>
                            <input type="text" name="hari" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jam Masuk</label>
                            <input type="time" name="jammasuk" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jam Keluar</label>
                            <input type="time" name="jamkeluar" class="form-control" required>
                        </div>

                        <!-- Tombol -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('jadwal') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
