@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tukang</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tukang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tukang</th>
                        <th>Telepon Tukang</th>
                        <th>Alamat Tukang</th>
                        <th>Username Tukang</th>
                        <th>Keahlian</th>
                        <th>Tarif</th>
                        <th>Norek</th>
                        <th>Status</th>
                        <th>Terdaftar Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Tukang</th>
                        <th>Telepon Tukang</th>
                        <th>Alamat Tukang</th>
                        <th>Username Tukang</th>
                        <th>Keahlian</th>
                        <th>Tarif</th>
                        <th>Norek</th>
                        <th>Status</th>
                        <th>Terdaftar Pada</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama_tukang }}</td>
                            <td>{{ $row->telepon_tukang }}</td>
                            <td>{{ $row->alamat_tukang }}</td>
                            <td>{{ $row->username_tukang }}</td>
                            <td>{{ $row->keahlian_tukang }}</td>
                            <td>{{ $row->tarif_tukang }}</td>
                            <td>{{ $row->norek_tukang }}</td>
                            <td>{{ $row->status_tukang }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                {{-- <button type="button" class="btn btn-success open_modal" value="{{ $row->id_tukang }}">Edit</button>  --}}
                                <button type="button" class="btn btn-success open_modal" data-toggle="modal" data-target="#modalEdit">Edit</button> 
                                  <form action="{{ route('pengelola.tukang.destroy', $row->id_tukang) }}" method="POST">
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
                <h5 class="modal-title" id="modalEditLabel">Edit Tukang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pengelola.tukang.update', $row->id_tukang) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_tukang">Nama Tukang</label>
                        <input type="text" class="form-control" id="nama_tukang" name="nama_tukang" value="{{ $row->nama_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="telepon_tukang">Telepon Tukang</label>
                        <input type="text" class="form-control" id="telepon_tukang" name="telepon_tukang" value="{{ $row->telepon_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat_tukang">Alamat Tukang</label>
                        <input type="text" class="form-control" id="alamat_tukang" name="alamat_tukang" value="{{ $row->alamat_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="username_tukang">Username Tukang</label>
                        <input type="text" class="form-control" id="username_tukang" name="username_tukang" value="{{ $row->username_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="keahlian_tukang">Keahlian Tukang</label>
                        <input type="text" class="form-control" id="keahlian_tukang" name="keahlian_tukang" value="{{ $row->keahlian_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="tarif_tukang">Tarif Tukang</label>
                        <input type="text" class="form-control" id="tarif_tukang" name="tarif_tukang" value="{{ $row->tarif_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="norek_tukang">Norek Tukang</label>
                        <input type="text" class="form-control" id="norek_tukang" name="norek_tukang" value="{{ $row->norek_tukang }}">
                    </div>
                    <div class="form-group">
                        <label for="status_tukang">Status</label>
                        <select name="status_tukang" id="status_tukang" class="form-control" required>
                            <option selected>-- Pilih --</option>
                            <option value="Aktif" @if($row->status_tukang == "Aktif") selected @endif>Aktif</option>
                            <option value="Nonaktif" @if($row->status_tukang == "Nonaktif") selected @endif>Nonaktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn=save">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
    {{-- <script>
       $(document).on('click','.open_modal',function(){
        var url = "pengelola.tukang.show";
        var id_tukang= $(this).val();
        $.get(url + '/' + id_tukang, function (data) {
            //success data
            console.log(data);
            $('#id_tukang').val(data.id);
            $('#nama_tukang').val(data.nama_tukang);
            $('#btn-save').val("update");
            $('#modalEdit').modal('show');
        }) 
    });    
    
    </script>  misal mau bikin javascript tambahan --}}
@endpush