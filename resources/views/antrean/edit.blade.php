@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-dark text-white">
        <h4 class="mb-0">Edit Data Antrean</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('antrean.update', $antrean->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nomor Plat Truk</label>
                <input type="text" name="nomor_plat" class="form-control" value="{{ $antrean->nomor_plat }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Sopir</label>
                <input type="text" name="nama_sopir" class="form-control" value="{{ $antrean->nama_sopir }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Berat Muatan (Kg)</label>
                <input type="number" name="berat_muatan" class="form-control" value="{{ $antrean->berat_muatan }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status Antrean</label>
                <select name="status" class="form-select">
                    <option value="Menunggu" {{ $antrean->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="Ditimbang" {{ $antrean->status == 'Ditimbang' ? 'selected' : '' }}>Ditimbang</option>
                    <option value="Selesai" {{ $antrean->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Data</button>
            <a href="{{ route('antrean.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
