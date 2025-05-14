@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Merchandise</h1>
    <form action="{{ route('merchandise.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4"></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('merchandise.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
