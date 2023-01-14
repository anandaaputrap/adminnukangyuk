@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pembayaran</h1>
</div>

<form action="{{ route('pengelola.bayar.update', $pembayaran->id_pembayaran) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="username_tukang">Username Tukang</label>
        <input type="text" class="form-control" id="username_tukang" name="username_tukang" readonly value="{{ $pembayaran->username_tukang }}">
    </div>
    <div class="form-group">
        <label for="keahlian_tukang">Keahlian Tukang</label>
        <input type="text" class="form-control" id="keahlian_tukang" name="keahlian_tukang" readonly value="{{ $pembayaran->keahlian_tukang }}">
    </div>
    <div class="form-group">
        <label for="nama_pelanggan">Tanggal Mulai</label>
        <input type="text" class="form-control" id="tgl_mulai" name="tgl_mulai" readonly value="{{ $pembayaran->tgl_mulai }}">
    </div>
    <div class="form-group">
        <label for="nama_pelanggan">Tanggal Selesai</label>
        <input type="text" class="form-control" id="tgl_selesai" name="tgl_selesai" readonly value="{{ $pembayaran->tgl_selesai }}">
    </div>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="text" class="form-control" id="total" name="total" readonly value="{{ $pembayaran->total }}">
    </div>
    <div class="form-group">
        <label for="bukti_byr">Bukti Bayar</label>
        <input type="text" class="form-control" id="bukti_byr" name="bukti_byr" readonly value="{{ $pembayaran->bukti_byr }}">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option selected>-- Pilih --</option>
            <option value="Terkonfirmasi" @if($pembayaran->status == "Terkonfirmasi") selected @endif>Terkonfirmasi</option>
            <option value="Belum Terkonfirmasi" @if($pembayaran->status == "Belum Terkonfirmasi") selected @endif>Belum Terkonfirmasi</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" id="btn=save">Simpan</button>
</form>






@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush