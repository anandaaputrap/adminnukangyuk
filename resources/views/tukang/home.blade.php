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
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->nama_tukang }}</td>
                            <td>{{ $row->telepon_tukang }}</td>
                            <td>{{ $row->alamat_tukang }}</td>
                            <td>{{ $row->username_tukang }}</td>
                            <td>{{ $row->keahlian_tukang }}</td>
                            <td>{{ $row->tarif_tukang }}</td>
                            <td>{{ $row->norek_tukang }}</td>
                            <td>{{ $row->status_tukang }}</td>
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