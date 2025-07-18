@extends('layouts.template')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Jadwal</h4>
        <a href="{{ url('jadwal/tambah') }}" class="btn btn-primary btn-sm">+ Tambah Jadwal</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Guru</th>
                <th>Bidang</th>
                <th>Hari</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->kelas->nama_kelas }}</td>
                <td>{{ $item->guru->nama }}</td>
                <td>{{ $item->bidang }}</td>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->jammasuk }}</td>
                <td>{{ $item->jamkeluar }}</td>
                <td>
                    <a href="{{ url('jadwal/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ url('jadwal/' . $item->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if ($jadwal->isEmpty())
            <tr>
                <td colspan="8" class="text-center">Tidak ada data jadwal</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
