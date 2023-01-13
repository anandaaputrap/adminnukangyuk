@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username Tukang</th>
                        <th>Keahlian Tukang</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Total</th>
                        <th>Bukti Bayar</th>
                        <th>Status</th>
                        <th>ID Pelanggan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username Tukang</th>
                        <th>Keahlian Tukang</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Total</th>
                        <th>Bukti Bayar</th>
                        <th>Status</th>
                        <th>ID Pelanggan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->username_tukang }}</td>
                            <td>{{ $row->keahlian_tukang }}</td>
                            <td>{{ $row->tgl_mulai }}</td>
                            <td>{{ $row->tgl_selesai }}</td>
                            <td>{{ $row->total }}</td>
                            <td>{{ $row->bukti_byr }}</td>
                            <td>{{ $row->status }}</td>
                            <td>{{ $row->id_pelanggan }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEdit">Edit</button>
                                <br>
                                <form action="{{ route('pengelola.bayar.destroy', $row->id_pembayaran) }}" method="post" style="display: inline-block">
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

<!-- Modal Edit -->


@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush