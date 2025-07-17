@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Tambah Data</div>

                    <div class="card-body">
                        <form method="post" action="/guru" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="nip">NIP</label>
                                <input type="text" name="nip" class="form-control" value="{{ old('nip') }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="bidang">Bidang Studi</label>
                                <select name="bidang" class="form-control" required>
                                    <option value="">- Pilih Bidang Studi -</option>
                                    @foreach(['PAI', 'MATEMATIKA', 'BAHASA INDONESIA', 'BAHASA INGGRIS', 'PJOK', 'MULOK', 'IPAS'] as $bid)
                                        <option value="{{ $bid }}" {{ old('bidang') == $bid ? 'selected' : '' }}>{{ $bid }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="wali_kelas">Wali Kelas</label>
                                <select name="wali_kelas" class="form-control" required>
                                    <option value="">-- Wali Kelas? --</option>
                                    <option value="Ya" {{ old('wali_kelas') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ old('wali_kelas') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nohp">No Handphone</label>
                                <input type="text" name="nohp" class="form-control" value="{{ old('nohp') }}">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ url('/guru') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection