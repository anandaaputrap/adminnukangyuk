@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pemesanan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Username Tukang</th>
                        <th>Keahlian Tukang</th>
                        <th>ID Pelanggan</th>
                        <th>Status Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Username Tukang</th>
                        <th>Keahlian Tukang</th>
                        <th>ID Pelanggan</th>
                        <th>Status Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $key)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $key->tgl_mulai }}</td>
                        <td>{{ $key->tgl_selesai }}</td>
                        <td>{{ $key->username_tukang }}</td>
                        <td>{{ $key->keahlian_tukang }}</td>
                        <td>{{ $key->id_pelanggan }}</td>
                        <td>{{ $key->status_pesan }}</td>
                        <td>
                            <a href="{{ route('pengelola.pesan.edit', $key->id_pesan) }}" class="btn btn-success btn-sm">Edit</a>
                            {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEdit">Edit</button> --}}
                            <form action="{{ route('pengelola.pesan.destroy', $key->id_pesan) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
        {{-- misal mau bikin javascript tambahan --}}
@endpush