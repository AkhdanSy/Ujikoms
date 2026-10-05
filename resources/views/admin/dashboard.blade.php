@extends('layouts.admin')

@section('title', 'Dashboard - Admin SMKN 4 Bogor')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5 ">
        <h1 class="h3 fw-bold text-secondary m-0">Dashboard</h1>
    </div>

    <!-- Welcome Card -->
    <div class="card border-0 bg-primary text-white rounded-4 shadow-sm mb-4">
        <div class="card-body p-4 p-md-5">
            <h2 class="fw-bold mb-2">Halo, {{ auth()->user()->name ?? 'Admin' }}! 👋</h2>
            <p class="mb-0 text-white-50 leading-relaxed fs-6">
                Selamat datang kembali. Kelola portal berita dan informasi sekolah dengan mudah, cepat, dan efisien melalui dashboard ini.
            </p>
        </div>
    </div>

    <!-- White Stat Cards Grid -->
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
        <div class="col">
            <div class="card border-primary bg-white rounded-4 shadow-sm h-100 p-3">
                <div class="card-body">
                    <h6 class="text-secondary fw-semibold text-uppercase mb-2">Jumlah postingan</h6>
                    <h2 class="display-5 fw-bold text-dark mb-0">{{ $totalBerita ?? 0 }}</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-primary bg-white rounded-4 shadow-sm h-100 p-3">
                <div class="card-body">
                    <h6 class="text-secondary fw-semibold text-uppercase mb-2">Rating XaoLery</h6>
                    <h2 class="display-5 fw-bold text-dark mb-0">
                        {{ $ratingXaoLery }} <span class="fs-4 text-warning"><i class="fa-solid fa-star"></i></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Banner -->
    <div class="card border-0 bg-white rounded-4 shadow-sm p-4 p-md-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div>
                <h3 class="fw-bold text-primary mb-1">Kelola berita sekolah mu sekarang!</h3>
                <p class="text-muted mb-0">Buat, perbarui, atau atur artikel berita yang tampil di halaman utama.</p>
            </div>
            <a href="{{ route('admin.berita.index') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold text-nowrap">
                Kelola Berita
            </a>
        </div>
    </div>
@endsection