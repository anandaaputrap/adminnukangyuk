@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pelanggan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Telepon Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>Username Pelanggan</th>
                        <th>Terdaftar Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Telepon Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>Username Pelanggan</th>
                        <th>Terdaftar Pada</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $row->nama_pelanggan }}</td>
                        <td>{{ $row->telepon_pelanggan }}</td>
                        <td>{{ $row->alamat_pelanggan }}</td>
                        <td>{{ $row->username_pelanggan }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit">Edit</button>
                            <br> 
                              <form action="{{ route('pengelola.pelanggan.destroy', $row->id_pelanggan) }}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger btn-sm">Hapus</button>
                              </form>
                          </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Edit Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pengelola.pelanggan.update', $row->id_pelanggan) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $row->nama_pelanggan }}">
                    </div>
                    <div class="form-group">
                        <label for="telepon_pelanggan">Telepon Pelanggan</label>
                        <input type="text" class="form-control" id="telepon_pelanggan" name="telepon_pelanggan" value="{{ $row->telepon_pelanggan }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat_pelanggan">Alamat Pelanggan</label>
                        <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" value="{{ $row->alamat_pelanggan }}">
                    </div>
                    <div class="form-group">
                        <label for="username_pelanggan">Username Pelanggan</label>
                        <input type="text" class="form-control" id="username_pelanggan" name="username_pelanggan" value="{{ $row->username_pelanggan }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>

@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush