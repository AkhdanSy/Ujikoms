@extends('layouts.admin')

@section('title', 'Kelola Galeri - SMKN 4 Bogor')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-secondary m-0">Galeri</h1>
        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary rounded-pill px-4 fw-medium d-flex align-items-center gap-2">
            Tambah <i class="fa-solid fa-plus small"></i>
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
        @forelse($galeris as $item)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Pembatas Tinggi Gambar Fix (150px) -->
                    <div style="height: 150px; overflow: hidden;" class="bg-light">
                        <img src="{{ asset('storage/' . $item->gambar) }}" 
                             class="w-100 h-100" 
                             style="object-fit: cover; object-position: center;" 
                             alt="{{ $item->judul }}">
                    </div>
                    
                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="card-title fw-bold text-dark mb-1 text-truncate" title="{{ $item->judul }}">{{ $item->judul }}</h6>
                        <div class="d-flex justify-content-between align-items-center mb-3 mt-auto pt-2 border-top">
                            <small class="text-muted" style="font-size: 0.75rem;">{{ $item->created_at->format('j-n-Y') }}</small>
                        </div>

                        <!-- Tombol Hapus & Edit -->
                        <div class="d-flex gap-2">
                            <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')" class="flex-grow-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm w-100 rounded-3 py-1 fw-medium" style="font-size: 0.8rem;">
                                    Hapus
                                </button>
                            </form>
                            <a href="{{ route('admin.galeri.edit', $item->id) }}" class="btn btn-primary btn-sm rounded-3 px-3 d-flex align-items-center justify-content-center" aria-label="Edit">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 py-5 text-center  text-muted">
                <p class="fs-5 mb-0 ">Belum ada galeri yang ditambahkan.</p>
            </div>
        @endforelse
    </div>
@endsection