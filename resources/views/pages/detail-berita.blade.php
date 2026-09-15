@extends('layouts.app')

@section('title', $berita->judul . ' - SMKN 4 Kota Bogor')

@section('content')
    <div class="bg-light py-5 min-vh-100">
        <div class="container">
            
            <!-- Top Navigation Header -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('pages.berita') }}" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali ke Berita">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 fw-medium">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pages.berita') }}" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Berita</a></li>
                        <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">{{ $berita->kategori }}</li>
                    </ol>
                </nav>
            </div>

            <!-- Main Content Card Detail (Side-by-Side Responsive Layout) -->
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                <div class="row g-4 align-items-start">
                    
                    <!-- Gambar Berita (Kolom Kiri) -->
                    <div class="col-lg-5">
                        <div class="rounded-4 overflow-hidden shadow-sm">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid w-100 object-fit-cover" style="aspect-ratio: 1 / 1;" alt="{{ $berita->judul }}">
                        </div>
                    </div>

                    <!-- Detail Info Berita (Kolom Kanan) -->
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <h1 class="fw-bold text-dark mb-3 display-6" style="word-break: break-word;">{{ $berita->judul }}</h1>
                        
                        <p class="text-secondary leading-relaxed mb-4" style="white-space: pre-line; word-break: break-word; font-size: 1.05rem;">
                            {{ $berita->deskripsi }}
                        </p>

                        <div class="d-flex align-items-center gap-2">
                            @php
                                $badgeBg = match(strtolower($berita->kategori)) {
                                    'prestasi' => 'bg-danger-subtle text-danger',
                                    'kokulikuler', 'kokurikuler' => 'bg-primary-subtle text-primary',
                                    'kegiatan' => 'bg-warning-subtle text-warning-emphasis',
                                    default => 'bg-primary-subtle text-primary',
                                };
                            @endphp
                            
                            <span class="badge {{ $badgeBg }} px-3 py-2 rounded-2 fs-6 fw-medium">{{ $berita->kategori }}</span>
                            <span class="badge bg-light text-secondary border px-3 py-2 rounded-2 fs-6 fw-medium">{{ $berita->created_at->format('d-m-Y') }}</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection