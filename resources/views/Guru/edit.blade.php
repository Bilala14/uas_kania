@extends('layouts.template')

@section('content')
<div class="py-4" style="background-color: #f5f7ff; min-height: 100vh;">
  <div class="d-flex justify-content-center">
    <div class="card w-100 mt-4" style="max-width: 800px;">
      <div class="card-body">
        <h4 class="card-title text-center mb-4">Form Edit Data Guru</h4>

        <form method="post" action="/guru/{{ $guru->id }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <!-- NIP -->
          <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}" required>
          </div>

          <!-- Nama -->
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $guru->nama) }}" required>
          </div>

          <!-- Jenis Kelamin -->
          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-select" required>
              <option value="">-- Pilih Jenis Kelamin --</option>
              <option value="Laki-laki" {{ $guru->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
              <option value="Perempuan" {{ $guru->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $guru->email) }}" required>
          </div>

          <!-- Bidang Studi -->
          <div class="mb-3">
            <label for="bidang" class="form-label">Bidang Studi</label>
            <select name="bidang" class="form-select" required>
              <option value="">- Pilih Bidang Studi -</option>
              <option value="PAI" {{ $guru->bidang == 'PAI' ? 'selected' : '' }}>PAI</option>
              <option value="MATEMATIKA" {{ $guru->bidang == 'MATEMATIKA' ? 'selected' : '' }}>MATEMATIKA</option>
              <option value="BAHASA INDONESIA" {{ $guru->bidang == 'BAHASA INDONESIA' ? 'selected' : '' }}>BAHASA INDONESIA</option>
              <option value="BAHASA INGGRIS" {{ $guru->bidang == 'BAHASA INGGRIS' ? 'selected' : '' }}>BAHASA INGGRIS</option>
              <option value="PJOK" {{ $guru->bidang == 'PJOK' ? 'selected' : '' }}>PJOK</option>
              <option value="MULOK" {{ $guru->bidang == 'MULOK' ? 'selected' : '' }}>MULOK</option>
              <option value="IPAS" {{ $guru->bidang == 'IPAS' ? 'selected' : '' }}>IPAS</option>
            </select>
          </div>

          <!-- Wali Kelas -->
          <div class="mb-3">
            <label for="wali_kelas" class="form-label">Wali Kelas?</label>
            <select name="wali_kelas" class="form-select" required>
              <option value="">-- Pilih --</option>
              <option value="Ya" {{ $guru->wali_kelas == 'Ya' ? 'selected' : '' }}>Ya</option>
              <option value="Tidak" {{ $guru->wali_kelas == 'Tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
          </div>

          <!-- No HP -->
          <div class="mb-3">
            <label for="nohp" class="form-label">No Handphone</label>
            <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $guru->nohp) }}" required>
          </div>

          <!-- Tombol Simpan -->
          <div class="text-end">
            <button type="submit" class="btn btn-primary">
              <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
