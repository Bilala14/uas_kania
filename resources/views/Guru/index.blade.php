@extends('layouts.template')

@section('content')
  <div class="d-flex justify-content-center mt-4">
    <div class="col-lg-12 grid-margin stretch-card" style="max-width: 1200px;">
    <div class="card w-100">
      <div class="card-body">
      <h4 class="card-title text-center mb-4">Data Guru</h4>

      <div class="d-flex justify-content-end mb-3">
        <a href="/guru/tambah" class="btn btn-primary btn-sm">
        <i class="fa-solid fa-user-plus"></i> Tambah Data
        </a>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
          <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($guru as $data)
        <tr>
        <td>{{ $nomor++ }}</td>
        <td>{{ $data->nip }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->email }}</td>
        <td>

        <!-- Tombol untuk membuka modal -->
        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
        data-bs-target="#modalDetail{{ $data->id }}">
        <i class="fa-solid fa-circle-info"></i>
        </button>

        <!-- Modal Detail -->
        <div class="modal fade" id="modalDetail{{ $data->id }}" tabindex="-1"
        aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modalLabel{{ $data->id }}">Detail Guru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
          <div class="mb-4"><strong>Nama:</strong> {{ $data->nama }}</div>
          <div class="mb-4"><strong>NIP:</strong> {{ $data->nip }}</div>
          <div class="mb-4"><strong>Email:</strong> {{ $data->email }}</div>
          <div class="mb-4"><strong>Bidang:</strong> {{ $data->bidang }}</div>
          <div class="mb-4"><strong>No HP:</strong> {{ $data->nohp }}</div>
          </div>

          </div>
        </div>
        </div>


        <a href="/guru/edit/{{$data->id}}" class="btn btn-info btn-sm"><i
          class="fa-solid fa-pen-to-square"></i></a>

        <!-- Tombol hapus -->
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
        data-bs-target="#exampleModal{{$data->id}}">
        <i class="fa-solid fa-trash"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          Yakin Data Guru a.n. {{$data->nama}} ingin dihapus?
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="guru/{{$data->id}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
          </div>
          </div>
        </div>
        </div>

        </td>
        </tr>
      @empty
        <tr>
        <td colspan="5" class="text-center">Data tidak tersedia.</td>
        </tr>
      @endforelse
        </tbody>
        </table>
      </div>

      </div>
    </div>
    </div>
  </div>
@endsection