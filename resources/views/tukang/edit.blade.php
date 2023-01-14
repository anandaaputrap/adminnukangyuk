@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Tukang</h1>
</div>

<form action="{{ route('pengelola.tukang.update', $tukang->id_tukang) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama_tukang">Nama Tukang</label>
        <input type="text" class="form-control" id="nama_tukang" name="nama_tukang" readonly value="{{ $tukang->nama_tukang }}">
    </div>
    <div class="form-group">
        <label for="telepon_tukang">Telepon Tukang</label>
        <input type="text" class="form-control" id="telepon_tukang" name="telepon_tukang" readonly value="{{ $tukang->telepon_tukang }}">
    </div>
    <div class="form-group">
        <label for="alamat_tukang">Alamat Tukang</label>
        <input type="text" class="form-control" id="alamat_tukang" name="alamat_tukang" readonly value="{{ $tukang->alamat_tukang }}">
    </div>
    <div class="form-group">
        <label for="username_tukang">Username Tukang</label>
        <input type="text" class="form-control" id="username_tukang" name="username_tukang" readonly value="{{ $tukang->username_tukang }}">
    </div>
    <div class="form-group">
        <label for="keahlian_tukang">Keahlian Tukang</label>
        <input type="text" class="form-control" id="keahlian_tukang" name="keahlian_tukang" readonly value="{{ $tukang->keahlian_tukang }}">
    </div>
    <div class="form-group">
        <label for="tarif_tukang">Tarif Tukang</label>
        <input type="text" class="form-control" id="tarif_tukang" name="tarif_tukang" readonly value="{{ $tukang->tarif_tukang }}">
    </div>
    <div class="form-group">
        <label for="norek_tukang">Norek Tukang</label>
        <input type="text" class="form-control" id="norek_tukang" name="norek_tukang" readonly value="{{ $tukang->norek_tukang }}">
    </div>
    <div class="form-group">
        <label for="status_tukang">Status</label>
        <select name="status_tukang" id="status_tukang" class="form-control" required>
            <option selected>-- Pilih --</option>
            <option value="Aktif" @if($tukang->status_tukang == "Aktif") selected @endif>Aktif</option>
            <option value="Nonaktif" @if($tukang->status_tukang == "Nonaktif") selected @endif>Nonaktif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" id="btn=save">Simpan</button>
</form>




@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush