@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Edit Data</div>

                    <div class="card-body">
                        <form method="post" action="/guru/{{ $guru->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- NIP -->
                            <div class="form-group mb-3">
                                <label for="nip">NIP</label>
                                <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}"
                                    required>
                            </div>

                            <!-- Nama Lengkap -->
                            <div class="form-group mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama', $guru->nama) }}"
                                    required>
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $guru->email) }}" required>
                            </div>

                            <!-- Bidang Studi -->
                            <div class="form-group mb-3">
                                <label for="bidang">Bidang Studi</label>
                                <select name="bidang" class="form-control" required>
                                    <option value="">- Pilih Bidang Studi -</option>
                                    <option value="PAI" {{ $guru->bidang == 'PAI' ? 'selected' : '' }}>PAI</option>
                                    <option value="MATEMATIKA" {{ $guru->bidang == 'MATEMATIKA' ? 'selected' : '' }}>
                                        MATEMATIKA</option>
                                    <option value="BAHASA INDONESIA" {{ $guru->bidang == 'BAHASA INDONESIA' ? 'selected' : '' }}>BAHASA INDONESIA</option>
                                    <option value="BAHASA INGGRIS" {{ $guru->bidang == 'BAHASA INGGRIS' ? 'selected' : '' }}>
                                        BAHASA INGGRIS</option>
                                    <option value="PJOK" {{ $guru->bidang == 'PJOK' ? 'selected' : '' }}>PJOK</option>
                                    <option value="MULOK" {{ $guru->bidang == 'MULOK' ? 'selected' : '' }}>MULOK</option>
                                    <option value="IPAS" {{ $guru->bidang == 'IPAS' ? 'selected' : '' }}>IPAS</option>
                                </select>
                            </div>

                            <!-- Wali Kelas -->
                            <div class="form-group mb-3">
                                <label for="wali_kelas">Wali Kelas?</label>
                                <select name="wali_kelas" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Ya" {{ $guru->wali_kelas == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ $guru->wali_kelas == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>

                            <!-- No HP -->
                            <div class="form-group mb-3">
                                <label for="nohp">No Handphone</label>
                                <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $guru->nohp) }}"
                                    required>
                            </div>

                            <!-- Tombol Simpan -->
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection