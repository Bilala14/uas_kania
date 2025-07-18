@extends('layouts.template')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header">Form Edit Kelas</div>

      <div class="card-body">

        {{-- Menampilkan error validasi --}}
        @if ($errors->any())
      <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif

        <form method="post" action="/kelas/{{ $kelas->id }}">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
          <label for="kode_kelas">Kode Kelas</label>
          <input type="text" name="kode_kelas" class="form-control"
          value="{{ old('kode_kelas', $kelas->kode_kelas) }}" readonly>
        </div>

        <div class="form-group mb-3">
          <label for="nama_kelas">Nama Kelas</label>
          <input type="text" name="nama_kelas" class="form-control"
          value="{{ old('nama_kelas', $kelas->nama_kelas) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="/kelas" class="btn btn-secondary">Kembali</a>
        </form>

      </div>
      </div>
    </div>
    </div>
  </div>
@endsection