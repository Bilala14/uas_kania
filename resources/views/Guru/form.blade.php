@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/guru" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Bidang Studi</label>
                            <select name="bidang" id="" class="form-control">
                                <option value="">-Pilih Bidang Studi-</option>
                                <option value="PAI">PAI</option>
                                <option value="MATEMATIKA">MATEMATIKA</option>
                                <option value="BAHASA INDONESIA">BAHASA INDONESIA</option>
                                <option value="BAHASA INGGRIS">BAHASA INGGRIS</option>
                                <option value="PJOK">PJOK</option>
                                <option value="MULOK">MULOK</option>
                                <option value="IPAS">IPAS</option>
                            </select>
                        </div>
                        <select name="wali_kelas" class="form-control">
                            <option value="">-- Wali Kelas? --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                            </select>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                            <input type="nohp" name="nohp" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
