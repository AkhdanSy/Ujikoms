@extends('layouts.app')

@section('title', $galeri->judul . ' - SMKN 4 Kota Bogor')

@section('content')
    <div class="bg-light py-5 min-vh-100">
        <div class="container">
            
            <!-- Breadcrumb Navigation -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('pages.galeri') }}" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali ke Galeri">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 fw-medium">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-secondary link-primary">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pages.galeri') }}" class="text-decoration-none text-secondary link-primary">Galeri</a></li>
                        <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">{{ $galeri->judul }}</li>
                    </ol>
                </nav>
            </div>

            <!-- Detail Content Card -->
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="rounded-4 overflow-hidden shadow-sm">
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="img-fluid w-100 object-fit-cover" style="max-height: 450px;" alt="{{ $galeri->judul }}">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h1 class="fw-bold text-dark mb-3 display-6 text-break">{{ $galeri->judul }}</h1>
                        <p class="text-muted mb-0"><i class="fa-regular fa-calendar me-2"></i>Diupload pada {{ $galeri->created_at->format('d F Y') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection