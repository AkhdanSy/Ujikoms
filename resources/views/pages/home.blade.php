@extends('layouts.app')

@section('title', 'Beranda - SMKN 4 Kota Bogor')

@section('content')
    <!-- Hero Section -->
    <section id="beranda" class="py-5 bg-light overflow-hidden">
        <div class="py-3">
        <div class="py-5">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold text-dark mb-0">SMKN 4</h1>
                    <h2 class="h1 fw-bold text-primary mb-3">Kota Bogor</h2>
                    <p class="lead text-secondary mb-4">
                        SMKN 4 Kota Bogor bukan hanya tempat untuk belajar, tetapi tempat untuk tumbuh, berkarya, dan mempersiapkan diri menjadi generasi hebat di masa depan.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <img src="{{ asset('assets/smk.jpg') }}" class="img-fluid rounded-4 shadow-lg object-fit-cover w-100" style="height: 320px;" alt="Siswa SMKN 4 Bogor">
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Section Tentang -->
    <section id="tentang" class="py-5">
        <div class="container py-lg-4">
            <h2 class="fw-bold text-center mb-5">Tentang</h2>
            
            <div class="row align-items-center g-4 mb-5">
                <div class="col-lg-7">
                    <p class="text-secondary fs-6 leading-relaxed">
                        SMKN 4 Bogor terus berupaya menciptakan lingkungan pendidikan yang mendukung siswa untuk mengembangkan potensi, keterampilan, dan kreativitas. Sebagai salah satu sekolah kejuruan, SMKN 4 Bogor tidak hanya berfokus pada pembelajaran akademik, tetapi juga membekali siswa dengan keterampilan yang sesuai dengan kebutuhan dunia kerja dan perkembangan teknologi.
                    </p>
                    <p class="text-secondary fs-6 leading-relaxed mb-0">
                        Berbagai kegiatan pembelajaran dan proyek kreatif menjadi bagian dari proses pendidikan di SMKN 4 Bogor. Melalui kegiatan tersebut, siswa didorong untuk lebih aktif, inovatif, dan mampu menerapkan ilmu yang telah dipelajari dalam kehidupan nyata.
                    </p>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/smkn4bogor (1).jpg') }}" class="img-fluid rounded-4 shadow-sm w-100" alt="Lingkungan Sekolah">
                </div>
            </div>
            
            <!-- Stats Cards Grid -->
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4 bg-white">
                        <div class="card-body">
                            <i class="fa-solid fa-users fs-1 text-primary mb-2"></i>
                            <h3 class="fw-bold mb-1">700+</h3>
                            <p class="text-muted mb-0">Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4 bg-white">
                        <div class="card-body">
                            <i class="fa-solid fa-graduation-cap fs-1 text-primary mb-2"></i>
                            <h3 class="fw-bold mb-1">4</h3>
                            <p class="text-muted mb-0">Jurusan</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4 bg-white">
                        <div class="card-body">
                            <i class="fa-solid fa-user-tie fs-1 text-primary mb-2"></i>
                            <h3 class="fw-bold mb-1">30+</h3>
                            <p class="text-muted mb-0">Guru</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4 bg-white">
                        <div class="card-body">
                            <i class="fa-solid fa-book-open fs-1 text-primary mb-2"></i>
                            <h3 class="fw-bold mb-1">10+</h3>
                            <p class="text-muted mb-0">Mapel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Jurusan -->
    <section id="siswa" class="py-5 bg-light">
        <div class="container py-lg-4">
            <h2 class="fw-bold text-center mb-5">Jurusan & Siswa</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                @php
                    $jurusans = [
                        ['nama' => 'PPLG', 'img' => 'pplg.webp'],
                        ['nama' => 'TJKT', 'img' => 'tjkt.webp'],
                        ['nama' => 'TO', 'img' => 'to.webp'],
                        ['nama' => 'TP', 'img' => 'tp.webp'],
                    ];
                @endphp

                @foreach($jurusans as $j)
                    <div class="col">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm position-relative text-white">
                            <img src="{{ asset('assets/' . $j['img']) }}" class="card-img" style="height: 260px; object-fit: cover;" alt="{{ $j['nama'] }}">
                            <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                <h4 class="card-title fw-bold mb-0">{{ $j['nama'] }} | 200+ Siswa</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Berita -->
    <section id="berita" class="py-5">
        <div class="container py-lg-4">
            <h2 class="fw-bold text-center mb-5">Berita</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @forelse($beritas as $item)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <a href="{{ route('pages.detail-berita', $item->id) }}" class="text-decoration-none text-dark h-100 d-flex flex-column">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $item->judul }}">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold mb-2">{{ $item->judul }}</h5>
                                    <p class="card-text text-secondary small flex-grow-1">{{ Str::limit($item->deskripsi, 60) }}</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2">{{ $item->kategori }}</span>
                                        <small class="text-muted">{{ $item->created_at->format('d-m-Y') }}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <p class="mb-0">Berita belum ditambahkan.</p>
                    </div>
                @endforelse
            </div>

            @if($beritas->isNotEmpty())
                <div class="text-center mt-5">
                    <a href="{{ route('pages.berita') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium">Lihat Semua Berita</a>
                </div>
            @endif
        </div>
    </section>

    <!-- Section Galeri -->
    <section id="galeri" class="py-5 bg-light">
        <div class="container py-lg-4">
            <h2 class="fw-bold text-center mb-5">Galeri</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @forelse($galeris as $item)
                    <div class="col">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm position-relative">
                            <a href="{{ route('pages.detail-galeri', $item->id) }}" class="text-decoration-none text-white h-100 d-flex flex-column">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img" style="height: 260px; object-fit: cover;" alt="{{ $item->judul }}">
                                <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                    <h4 class="card-title fw-bold mb-0 text-white">{{ $item->judul }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <p class="mb-0">Galeri belum ditambahkan.</p>
                    </div>
                @endforelse
            </div>

            @if($galeris->isNotEmpty())
                <div class="text-center mt-5">
                    <a href="{{ route('pages.galeri') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium">Lihat Semua Galeri</a>
                </div>
            @endif
        </div>
    </section>

    <!-- Section FAQ -->
    <section id="faq" class="py-5">
        <div class="container py-lg-4">
            <h2 class="fw-bold text-center mb-5">Kontak & Rating</h2>
            
            
            <!-- Banner Kontak -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-primary text-white rounded-4 p-4 p-md-5 text-center shadow">
                        <h3 class="fw-bold mb-3">Ada pertanyaan mengenai XaoLery?</h3>
                        <a href="https://wa.me/6282310768523" class="btn btn-light text-primary rounded-pill px-4 py-2 fw-semibold">Hubungi Kami</a>
                    </div>
                </div>
            </div>

            <!-- Section Kepuasan Pengguna -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">
                    <span class="badge bg-light text-dark border px-4 py-2 rounded-pill fs-6 fw-normal mb-3 shadow-sm">
                        Kepuasan pengguna
                    </span>

                    @if(session('rating_success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
                            {{ session('rating_success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card border-primary border-opacity-50 rounded-4 p-4 shadow-sm bg-white">
                        <form action="{{ route('rating.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-start">
                            <label for="bintang" class="form-label fw-semibold text-secondary">Beri Nilai XaoLery (1 - 5)</label>
                            <select name="bintang" id="bintang" class="form-select form-select-lg rounded-3" required>
                                <option value="" selected disabled>Pilih Rating</option>
                                <option value="5">⭐⭐⭐⭐⭐ (5 - Sangat Puas)</option>
                                <option value="4">⭐⭐⭐⭐ (4 - Puas)</option>
                                <option value="3">⭐⭐⭐ (3 - Cukup)</option>
                                <option value="2">⭐⭐ (2 - Kurang)</option>
                                <option value="1">⭐ (1 - Sangat Kurang)</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-3 px-4 py-2 fw-semibold w-100">Kirim Rating</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection