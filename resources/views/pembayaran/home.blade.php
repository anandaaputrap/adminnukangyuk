@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-center mb-4">
    <div class="card">
        <div class="card-body">
            <form action="" method="get">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-3">
                            <label for="keahlian_tukang" class="form-label">Keahlian Tukang<i
                                    class="text-danger"></i></label>
                            <input type="text" name="keahlian_tukang" class="form-control" id="keahlian_tukang">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-3">
                            <label for="total" class="form-label">Total<i
                                    class="text-danger"></i></label>
                            <input type="text" name="total" class="form-control" id="total">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status <i
                                    class="text-danger"></i></label>
                            <input type="text" name="status" class="form-control" id="status">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label">Nama Pelanggan<i
                                    class="text-danger"></i></label>
                            <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-3">
                            <label for="tgl_mulai" class="form-label">Tanggal Awal<i
                                    class="text-danger"></i></label>
                            <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-3">
                            <label for="tgl_selesai" class="form-label">Tanggal Akhir<i
                                    class="text-danger"></i></label>
                            <input type="date" name="tgl_selesai" class="form-control" id="tgl_selesai">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
    </div>
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
                        <th>Nama Pelanggan</th>
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
                        <th>Nama Pelanggan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($bayar as $key)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $key->username_tukang }}</td>
                            <td>{{ $key->keahlian_tukang }}</td>
                            <td>{{ $key->tgl_mulai->format('d F Y') }}</td>
                            <td>{{ $key->tgl_selesai->format('d F Y') }}</td>
                            <td>{{ $key->total }}</td>
                            <td><img src="{{ asset('storage/'.$key->bukti_byr) }}" alt="" width="100px"></td>
                            <td>{{ $key->status }}</td>
                            <td>{{ $key->pelanggan->nama_pelanggan ?? '-' }}</td>
                            <td>
                                <a href="{{ route('pengelola.bayar.edit', $key->id_pembayaran) }}" class="btn btn-success btn-sm">Edit</a>
                                <br>
                                <form action="{{ route('pengelola.bayar.destroy', $key->id_pembayaran) }}" method="post" style="display: inline-block">
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