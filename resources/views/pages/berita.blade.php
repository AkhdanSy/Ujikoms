@extends('layouts.app')

@section('title', 'Berita - SMKN 4 Kota Bogor')

@section('content')
    <div class="bg-light py-5 min-vh-100">
        <div class="container">
            
            <!-- Breadcrumb Navigation -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('home') }}#berita" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 fw-medium">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}#berita" class="text-decoration-none text-secondary link-primary">Beranda</a></li>
                        <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>

            <!-- List Berita Per Kategori -->
            @forelse($beritasByKategori as $kategori => $items)
                <section class="mb-5">
                    <div class="text-center mb-4">
                        <span class="badge bg-white text-primary shadow-sm px-4 py-2 rounded-pill fs-6 fw-semibold border border-primary">
                            {{ $kategori }}
                        </span>
                    </div>
                    
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach($items as $item)
                            <div class="col">
                                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                                    <a href="{{ route('pages.detail-berita', $item->id) }}" class="text-decoration-none text-dark h-100 d-flex flex-column">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" style="height: 220px; object-fit: cover;" alt="{{ $item->judul }}">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fw-bold text-dark mb-2">{{ $item->judul }}</h5>
                                            <p class="card-text text-secondary small flex-grow-1 mb-3">{{ Str::limit($item->deskripsi, 60) }}</p>
                                            
                                            <div class="d-flex justify-content-between align-items-center mt-auto pt-2 border-top">
                                                @php
                                                    $badgeBg = match(strtolower($kategori)) {
                                                        'prestasi' => 'bg-danger-subtle text-danger',
                                                        'kokulikuler', 'kokurikuler' => 'bg-primary-subtle text-primary',
                                                        'kegiatan' => 'bg-warning-subtle text-warning-emphasis',
                                                        default => 'bg-primary-subtle text-primary',
                                                    };
                                                @endphp
                                                <span class="badge {{ $badgeBg }} rounded-2 px-2 py-1 small">{{ $item->kategori }}</span>
                                                <small class="text-muted">{{ $item->created_at->format('d-m-Y') }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @empty
                <div class="text-center text-muted py-5">
                    <p class="fs-5 mb-0">Belum ada berita yang diterbitkan.</p>
                </div>
            @endforelse

        </div>
    </div>
@endsection