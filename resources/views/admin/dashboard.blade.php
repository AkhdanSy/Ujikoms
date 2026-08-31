@extends('layouts.admin')

@section('title', 'Dashboard - Admin SMKN 4 Bogor')

@section('content')
    <h1 class="page-title">Dashboard</h1>

    <!-- Welcome Card -->
    <div class="welcome-card">
        <h2>Halo, {{ auth()->user()->name ?? 'Admin' }}! 👋</h2>
        <p>Selamat datang kembali. Kelola portal berita dan informasi sekolah dengan mudah, cepat, dan efisien melalui dashboard ini.</p>
    </div>

    <!-- Blue Stat Cards Grid -->
    <div class="stats-grid-top">
        <div class="stat-card blue-card">
            <h3>Jumlah guru</h3>
            <span class="stat-number">50</span>
        </div>
        <div class="stat-card blue-card">
            <h3>Jumlah siswa</h3>
            <span class="stat-number">1160</span>
        </div>
        <div class="stat-card blue-card">
            <h3>Jumlah kelas</h3>
            <span class="stat-number">30</span>
        </div>
    </div>

    <!-- White Stat Cards Grid -->
    <div class="stats-grid-bottom">
        <div class="stat-card white-card">
            <h3>Jumlah postingan</h3>
            <span class="stat-number">{{ $totalBerita ?? 0 }}</span>
        </div>
        <div class="stat-card white-card">
            <h3>Jumlah kategori postingan</h3>
            <span class="stat-number">{{ $totalKategori ?? 0 }}</span>
        </div>
    </div>

    <!-- CTA Banner -->
    <div class="cta-banner">
        <h2>Kelola berita sekolah mu sekarang!</h2>
        <a href="{{ route('admin.berita.index') }}" class="btn-kelola">Kelola</a>
    </div>
@endsection