@extends('layouts.admin')

@section('title', 'Tambah Galeri - SMKN 4 Bogor')

@section('content')
    <div class="d-flex align-items-center mb-4">
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali ke Galeri">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1 class="h3 fw-bold text-primary m-0">Tambah Galeri Baru</h1>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
        <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Upload Gambar Card -->
            <div class="mb-4">
                <label for="gambar" class="form-label fw-semibold text-secondary">Gambar Utama</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
                
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Judul Galeri -->
            <div class="mb-4">
                <label for="judul" class="form-label fw-semibold text-secondary">Judul Galeri</label>
                <input type="text" name="judul" id="judul" class="form-control form-control-lg fs-6 rounded-3 @error('judul') is-invalid @enderror" value="{{ old('judul') }}" placeholder="Contoh : Kegiatan kokulikuler rabu bersih" required>
                @error('judul')
                    <div class="invalid-feedback small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Action -->
            <div class="text-end pt-3 border-top">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-medium">Tambah Galeri</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/create.js') }}"></script>
@endpush