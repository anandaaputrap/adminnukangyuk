@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pelanggan</h1>
</div>

<form action="{{ route('pengelola.pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="telepon_pelanggan">Telepon Pelanggan</label>
        <input type="text" class="form-control" id="telepon_pelanggan" name="telepon_pelanggan" value="{{ $pelanggan->telepon_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="alamat_pelanggan">Alamat Pelanggan</label>
        <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" value="{{ $pelanggan->alamat_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="username_pelanggan">Username Pelanggan</label>
        <input type="text" class="form-control" id="username_pelanggan" name="username_pelanggan" value="{{ $pelanggan->username_pelanggan }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>

@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush