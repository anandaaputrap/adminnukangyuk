@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pemesanan</h1>
</div>

<form action="{{ route('pengelola.pesan.update', $pemesanan->id_pesan) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="tgl_mulai">Tanggal Mulai</label>
        <input type="text" class="form-control" id="tgl_mulai" name="tgl_mulai" readonly value="{{ $pemesanan->tgl_mulai }}">
    </div>
    <div class="form-group">
        <label for="tgl_selesai">Tanggal Selesai</label>
        <input type="text" class="form-control" id="tgl_selesai" name="tgl_selesai" readonly value="{{ $pemesanan->tgl_selesai }}">
    </div>
    <div class="form-group">
        <label for="username_tukang">Username Tukang</label>
        <input type="text" class="form-control" id="username_tukang" name="username_tukang" readonly value="{{ $pemesanan->username_tukang }}">
    </div>
    <div class="form-group">
        <label for="keahlian_tukang">Keahlian Tukang</label>
        <input type="text" class="form-control" id="keahlian_tukang" name="keahlian_tukang" readonly value="{{ $pemesanan->keahlian_tukang }}">
    </div>
    <div class="form-group">
        <label for="id_pelanggan">ID Pelanggan</label>
        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" readonly value="{{ $pemesanan->id_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="status_pesan">Status Pesan</label>
        <select name="status_pesan" id="status_pesan" class="form-control" required>
            <option selected>-- Pilih --</option>
            <option value="Terkonfirmasi" @if($pemesanan->status_pesan == "Terkonfirmasi") selected @endif>Terkonfirmasi</option>
            <option value="Belum Terkonfirmasi" @if($pemesanan->status_pesan == "Belum Terkonfirmasi") selected @endif>Belum Terkonfirmasi</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" id="btn=save">Simpan</button>
</form>






@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush