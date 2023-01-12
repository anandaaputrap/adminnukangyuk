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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush