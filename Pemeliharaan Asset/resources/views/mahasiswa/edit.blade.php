@extends('layout.template')
<!-- START FORM -->
@section('konten') 

<form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">Asset</label>
        <div class="col-sm-10">
            {{ $data->nim }}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tanggal" class="col-sm-2 col-form-label">Jenis Perbaikan</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name='tanggal' value="{{ $data->tanggal }}" id="tanggal">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Jenis Perbaikan</label>
        <div class="col-sm-10">
            <select class="form-control" id="jenis" name="nama" value="{{ Session::get('nama') }}" id="nama" required>
                <option value="">Pilih Jenis Pemeliharaan</option>
                <option value="rutin">Pemeliharaan Rutin</option>
                <option value="perbaikan">Perbaikan</option>
                <option value="upgrade">Upgrade Perangkat Lunak</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Kegiatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Bukti</label>
        <div class="col-sm-10">
            <input type="blob" class="form-control" name='jurusan' value="{{ $data->bukti }}" id="jurusan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
    
</div>
</form>
<!-- AKHIR FORM -->
@endsection