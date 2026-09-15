@extends('layouts.admin')

@section('title', 'Tambah Berita - SMKN 4 Bogor')

@section('content')
    <div class="d-flex align-items-center mb-4">
        <a href="{{ route('admin.berita.index') }}" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm me-3" aria-label="Kembali ke Berita">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1 class="h3 fw-bold text-primary m-0">Tambah Berita Baru</h1>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Upload Gambar Card -->
            <div class="mb-4">
                <label class="form-label fw-semibold text-secondary">Gambar Utama</label>
                <div class="border border-2 border-dashed rounded-4 p-4 text-center bg-light position-relative" id="dropzone">
                    <img id="image-preview" src="" alt="Preview" class="img-fluid rounded-3 mb-3 d-none mx-auto" style="max-height: 180px; object-fit: cover;">
                    <div id="upload-placeholder">
                        <i class="fa-solid fa-cloud-arrow-up display-5 text-primary mb-2"></i>
                        <p class="mb-1 text-dark fw-medium" id="upload-title-text">Klik atau tarik gambar ke sini</p>
                        <span class="text-muted small">PNG, JPG, WEBP hingga 2MB</span>
                    </div>
                    <input type="file" name="gambar" id="gambar-input" accept="image/*" class="position-absolute top-0 start-0 w-100 h-100 opacity-0 cursor-pointer" required style="cursor: pointer;">
                </div>
                @error('gambar')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Judul Berita -->
            <div class="mb-4">
                <label for="judul" class="form-label fw-semibold text-secondary">Judul Berita</label>
                <input type="text" name="judul" id="judul" class="form-control form-control-lg fs-6 rounded-3 @error('judul') is-invalid @enderror" value="{{ old('judul') }}" placeholder="Contoh : Kegiatan kokulikuler rabu bersih" required>
                @error('judul')
                    <div class="invalid-feedback small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Grid Deskripsi & Kategori -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <label for="deskripsi" class="form-label fw-semibold text-secondary">Deskripsi Berita</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control rounded-3 @error('deskripsi') is-invalid @enderror" rows="6" placeholder="Tuliskan konten berita secara mendetail..." required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-4">
                    <label for="kategori" class="form-label fw-semibold text-secondary">Kategori</label>
                    <select name="kategori" id="kategori" class="form-select form-select-lg fs-6 rounded-3 mb-3 @error('kategori') is-invalid @enderror" required>
                        <option value="" disabled selected hidden>Pilih kategori</option>
                        <option value="Prestasi" {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                        <option value="Kokulikuler" {{ old('kategori') == 'Kokulikuler' ? 'selected' : '' }}>Kokulikuler</option>
                        <option value="Kegiatan" {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                        <option value="Akademik" {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback small mb-2">{{ $message }}</div>
                    @enderror

                    <!-- Input Tambahan Kategori Lainnya -->
                    <div id="wrapper-kategori-lainnya" style="display: {{ old('kategori') == 'Lainnya' ? 'block' : 'none' }};">
                        <label for="kategori_lainnya" class="form-label small text-secondary">Kategori Baru</label>
                        <input type="text" name="kategori_lainnya" id="kategori_lainnya" class="form-control rounded-3 @error('kategori_lainnya') is-invalid @enderror" value="{{ old('kategori_lainnya') }}" placeholder="Masukkan nama kategori baru">
                        @error('kategori_lainnya')
                            <div class="invalid-feedback small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Submit Action -->
            <div class="text-end pt-3 border-top">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-medium">Tambah Berita</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/create.js') }}"></script>
@endpush