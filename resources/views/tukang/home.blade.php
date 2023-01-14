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
                    @foreach ($data as $key)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $key->nama_tukang }}</td>
                            <td>{{ $key->telepon_tukang }}</td>
                            <td>{{ $key->alamat_tukang }}</td>
                            <td>{{ $key->username_tukang }}</td>
                            <td>{{ $key->keahlian_tukang }}</td>
                            <td>{{ $key->tarif_tukang }}</td>
                            <td>{{ $key->norek_tukang }}</td>
                            <td>{{ $key->status_tukang }}</td>
                            <td>{{ $key->created_at }}</td>
                            <td>
                                <a href="{{ route('pengelola.tukang.edit', $key->id_tukang) }}" class="btn btn-success btn-sm">Edit</a>
                                {{-- <button type="button" class="btn btn-success open_modal" value="{{ $row->id_tukang }}">Edit</button>  --}}
                                {{-- <button type="button" class="btn btn-success open_modal" data-toggle="modal" data-target="#modalEdit">Edit</button>  --}}
                                  <form action="{{ route('pengelola.tukang.destroy', $key->id_tukang) }}" method="POST">
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