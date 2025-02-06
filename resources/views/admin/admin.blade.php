@extends('layout.master')

@section('content')
<div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-center">
      <form class="col-12 col-lg-auto mb-2 mb-1g-8 me-lg-auto" role="search" method="get" action="/">
        <input type="text" name="cari" class="form-control w-75 d-inline" id="search" placeholder="Masukkan NIS Siswa">
        <button type="submit" class="btn btn-success">Cari</button>
      </form>
    </div>
  </div>
 

  <div class="container">
    <h3 class="mt-4">Data Pelanggaran kedisiplinan</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
      </button>    
      <div class="table-responsive">
      <table class="table table-hover table-borderless">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>tanggal</th>
            <th>tipe disiplin</th>
            <th>poin</th>
            <th>deskripsi</th>
            <th>aksi</th>
          </tr>
        </thead>
        @foreach ($data ?? [] as $index => $ds)
        <tbody>
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{$ds->NIS}}</td>
                <td>{{$ds->nama}}</td>
                <td>{{$ds->tanggal}}</td>
                <td>{{$ds->type_disiplin}}</td>
                <td>{{$ds->poin}}</td>
                <td>{{$ds->deskripsi}}</td>
                <td><button type="button" class="btn btn-primary">
                    ads
                 </button></td>
              </tr>
          </tbody>
          @endforeach

      </table>
    </div>
  </div>

  <div class="container">
    <h3 class="mt-4">Data User</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
      </button>    
      <div class="table-responsive">
      <table class="table table-hover table-borderless">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>admin tipe</th>
            <th>aksi</th>
          </tr>
        </thead>
        @foreach ($admin as $ad )
            <?php $no = 1; ?>
        <tbody>
            <tr>
                <td>{{$no++}}</td>
                <td>{{$ad->User}}</td>
                <td>{{$ad->admin_type}}</td>
                <td>
                    <a href="">hapus</a>
                    <a href="">edit</a>
                </td>
              </tr>
          </tbody>
          @endforeach

      </table>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/admin" enctype="multipart/form-data">
                <div class="modal-body">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="User" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="Password" placeholder="Masukkan password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Admin Type</label>
                    <select name="admin_type" class="form-control" required>
                        <option value="admin">Admin</option>
                        <option value="guest">Guest</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  {{-- /* detail */ --}}
  {{-- <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="detailLabel">Detail Data Pelanggaran Kedisiplinan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="">edit</a></button>
          <button type="button" class="btn btn-primary"><a href="">hapus</a></button>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
