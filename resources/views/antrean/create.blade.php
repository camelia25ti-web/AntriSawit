@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-dark text-white">
        <h4 class="mb-0">Tambah Antrean Truk Sawit</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('antrean.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nomor Plat Truk</label>
                <input type="text" name="nomor_plat" class="form-control" placeholder="Contoh: BM 1234 XY" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Sopir</label>
                <input type="text" name="nama_sopir" class="form-control" placeholder="Masukkan nama sopir" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Estimasi Berat Muatan (Kg)</label>
                <input type="number" name="berat_muatan" class="form-control" placeholder="Contoh: 5000" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Antrean</button>
            <a href="{{ route('antrean.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
