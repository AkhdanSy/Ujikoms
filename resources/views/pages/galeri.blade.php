@extends('layouts.app')

@section('title', 'Galeri - SMKN 4 Kota Bogor')

@section('content')
    <div class="bg-light py-5 min-vh-100">
        <div class="container">
            
            <!-- Breadcrumb Navigation -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('home') }}#galeri" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali ke Beranda">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 fw-medium">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}#galeri" class="text-decoration-none text-secondary link-primary">Beranda</a></li>
                        <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Galeri</li>
                    </ol>
                </nav>
            </div>

            <!-- Grid Galeri -->
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                @forelse($galeris as $item)
                    <div class="col">
                        <a href="{{ route('pages.detail-galeri', $item->id) }}" class="text-decoration-none text-white h-100 d-flex flex-column">
                            <div class="card border-0 rounded-4 overflow-hidden shadow-sm position-relative">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img" style="height: 260px; object-fit: cover;" alt="{{ $item->judul }}">
                                <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                    <h4 class="card-title fw-bold mb-0 text-white">{{ $item->judul }}</h4>
                                </div> 
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <p class="fs-5 mb-0">Belum ada galeri yang diterbitkan.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
@endsection