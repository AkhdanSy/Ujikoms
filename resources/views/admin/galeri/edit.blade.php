@extends('layouts.admin')

@section('title', 'Edit Galeri - SMKN 4 Bogor')

@section('content')
    <div class="d-flex align-items-center mb-4">
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali ke Galeri">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1 class="h3 fw-bold text-primary m-0">Edit Galeri</h1>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
        <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Upload Gambar Card -->
            <div class="mb-4">
                <label class="form-label fw-semibold text-secondary">Gambar Utama <span class="fw-normal text-muted">(Kosongkan jika tidak ingin diubah)</span></label>
                <div class="border border-2 border-dashed rounded-4 p-4 text-center bg-light position-relative" id="dropzone">
                    <img id="image-preview" src="{{ asset('storage/' . $galeri->gambar) }}" alt="Preview" class="img-fluid rounded-3 mb-3 d-block mx-auto" style="max-height: 180px; object-fit: cover;">
                    <div id="upload-placeholder">
                        <i class="fa-solid fa-cloud-arrow-up display-6 text-primary mb-2"></i>
                        <p class="mb-0 text-dark fw-medium" id="upload-title-text">Klik untuk mengganti gambar</p>
                    </div>
                    <input type="file" name="gambar" id="gambar-input" accept="image/*" class="position-absolute top-0 start-0 w-100 h-100 opacity-0 cursor-pointer" style="cursor: pointer;">
                </div>
                @error('gambar')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Judul Galeri -->
            <div class="mb-4">
                <label for="judul" class="form-label fw-semibold text-secondary">Judul Galeri</label>
                <input type="text" name="judul" id="judul" class="form-control form-control-lg fs-6 rounded-3 @error('judul') is-invalid @enderror" value="{{ old('judul', $galeri->judul) }}" required>
                @error('judul')
                    <div class="invalid-feedback small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Action -->
            <div class="text-end pt-3 border-top">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-medium">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/edit.js') }}"></script>
@endpush