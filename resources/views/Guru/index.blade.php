@extends('layouts.template')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Guru</h4>

        <div class="text-end mb-3">
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
                  <a href="#" class="btn btn-warning btn-sm" title="Detail">
                    <i class="fa-solid fa-circle-info"></i>
                  </a>

                  <a href="/guru/edit/{{ $data->id }}" class="btn btn-info btn-sm" title="Edit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>

                  <!-- Tombol hapus -->
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $data->id }}">
                    <i class="fa-solid fa-trash"></i>
                  </button>

                  <!-- Modal konfirmasi hapus -->
                  <div class="modal fade" id="hapusModal{{ $data->id }}" tabindex="-1" aria-labelledby="hapusModalLabel{{ $data->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapusModalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Yakin ingin menghapus data guru atas nama <strong>{{ $data->nama }}</strong>?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <form action="/guru/{{ $data->id }}" method="POST" class="d-inline">
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
