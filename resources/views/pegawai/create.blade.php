@extends('layouts/app')
@section('content')


<div class="container mt-5">
        <h1>Tambah Pegawai</h1>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kodepegawai" class="form-label">Kode Pegawai</label>
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required>
            </div>
            <div class="mb-3">
                <label for="namapegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="namapegawai" name="namapegawai" required>
            </div>
            <div class="mb-3">
                <label for="kerja_bagian" class="form-label">Bagian Kerja</label>
                <input type="text" class="form-control" id="kerja_bagian" name="kerja_bagian" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    @endsection