@extends('layouts.app')

@section('content')
<!-- Hero / Banner Utama -->
<div class="bg-dark text-white" style="padding-top: 150px; padding-bottom: 110px; background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('{{ asset('assets/img/service/top-service-1.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-warning text-dark px-3 py-2 mb-3 fw-bold">SISTEM LOGISTIK & ANTREAN PABRIK SAWIT</span>
                <h1 class="display-4 fw-bold mb-3">Manajemen Antrean Truk Sawit Lebih Cepat & Teratur</h1>
                <p class="lead mb-4 text-light">
                    Pantau kedatangan armada truk pengangkut Tandan Buah Segar (TBS), pencatatan estimasi tonase muatan, hingga status penimbangan secara real-time.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('antrean.index') }}" class="btn btn-warning btn-lg fw-bold px-4">Lihat Daftar Antrean</a>
                    <a href="{{ route('antrean.create') }}" class="btn btn-outline-light btn-lg px-4">+ Daftarkan Truk Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Layanan & Fitur Utama -->
<div class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h6 class="text-warning fw-bold text-uppercase">Alur Operasional</h6>
            <h2 class="fw-bold">Layanan Logistik AntriSawit</h2>
            <p class="text-muted">Kemudahan pengelolaan distribusi hasil panen sawit dari kebun menuju pabrik pengolahan.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body">
                        <div class="mb-3 text-warning fs-2">
                            <i class="fa-solid fa-truck-moving"></i>
                        </div>
                        <h5 class="card-title fw-bold">Registrasi Armada Truk</h5>
                        <p class="card-text text-muted">
                            Pencatatan nomor polisi kendaraan dan identitas sopir secara digital saat memasuki area pos keamanan pabrik.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body">
                        <div class="mb-3 text-warning fs-2">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div>
                        <h5 class="card-title fw-bold">Monitoring Berat Muatan</h5>
                        <p class="card-text text-muted">
                            Pendataan estimasi dan hasil timbangan TBS dalam satuan kilogram (Kg) untuk akurasi laporan harian.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body">
                        <div class="mb-3 text-warning fs-2">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                        <h5 class="card-title fw-bold">Status Bongkar Muat</h5>
                        <p class="card-text text-muted">
                            Pembaruan status antrean mulai dari Menunggu, Ditimbang, hingga Selesai bongkar muat secara transparan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
