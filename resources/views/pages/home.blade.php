@extends('layouts.app')

@section('title', 'Beranda - SMKN 4 Kota Bogor')

@section('content')
    <!-- Hero Section -->
    <section id="beranda" class="hero-section">
      <div class="hero-text">
          <h1>SMKN 4</h1>
          <h2 class="title-sub">Kota Bogor</h2>
          <p>SMKN 4 Kota Bogor bukan hanya tempat untuk belajar, tetapi tempat untuk tumbuh, berkarya, dan mempersiapkan diri menjadi generasi hebat di masa depan.</p>
      </div>
      
      <div class="hero-card-container">
          <div class="hero-card card-back">
              <img src="{{ asset('assets/smk.jpg') }}" alt="Siswa SMKN 4 Bogor">
          </div>
          <div class="hero-card card-front">
              <img src="{{ asset('assets/kepsek.webp') }}" alt="Foto Sekolah 2">
          </div>
      </div>
    </section>

    <!-- Section Tentang -->
    <section id="tentang" class="about-section">
        <h2>Tentang</h2>
        <div class="about-content">
            <div class="about-text">
                <p>SMKN 4 Bogor terus berupaya menciptakan lingkungan pendidikan yang mendukung siswa untuk mengembangkan potensi, keterampilan, dan kreativitas. Sebagai salah satu sekolah kejuruan, SMKN 4 Bogor tidak hanya berfokus pada pembelajaran akademik, tetapi juga membekali siswa dengan keterampilan yang sesuai dengan kebutuhan dunia kerja dan perkembangan teknologi.</p>
                    <p>Berbagai kegiatan pembelajaran dan proyek kreatif menjadi bagian dari proses pendidikan di SMKN 4 Bogor. Melalui kegiatan tersebut, siswa didorong untuk lebih aktif, inovatif, dan mampu menerapkan ilmu yang telah dipelajari dalam kehidupan nyata.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('assets/smkn4bogor (1).jpg') }}" alt="Lingkungan Sekolah">
            </div>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <i class="fa-solid fa-users stat-icon"></i>
                <h3>700+</h3>
                <p>Siswa</p>
            </div>
            <div class="stat-card">
                <i class="fa-solid fa-graduation-cap stat-icon"></i>
                <h3>4</h3>
                <p>Jurusan</p>
            </div>
            <div class="stat-card">
                <i class="fa-solid fa-user-tie stat-icon"></i>
                <h3>30+</h3>
                <p>Guru</p>
            </div>
            <div class="stat-card">
                <i class="fa-solid fa-book-open stat-icon"></i>
                <h3>10+</h3>
                <p>Mapel</p>
            </div>
        </div>
    </section>

    <!-- Section Jurusan & Siswa -->
    <section id="siswa" class="jurusan-section">
        <h2>Jurusan & Siswa</h2>
        <div class="jurusan-grid">
            <div class="jurusan-card">
                <img src="{{ asset('assets/pplg.webp') }}" alt="PPLG">
                <div class="overlay-title">PPLG</div>
            </div>
            <div class="jurusan-card">
                <img src="{{ asset('assets/tjkt.webp') }}" alt="TJKT">
                <div class="overlay-title">TJKT</div>
            </div>
            <div class="jurusan-card">
                <img src="{{ asset('assets/to.webp') }}" alt="TO">
                <div class="overlay-title">TO</div>
            </div>
            <div class="jurusan-card">
                <img src="{{ asset('assets/tp.webp') }}" alt="TP">
                <div class="overlay-title">TP</div>
            </div>
        </div>
    </section>

    <!-- Section Berita -->
    <section id="berita" class="berita-section">
        <h2>Berita</h2>
        @forelse($beritas as $item)
            @if($loop->first)
            <div class="slider-wrapper">
                <div class="slider-track">
            @endif
            
            <div class="news-card">
                <a href="{{ route('pages.detail-berita', $item->id) }}" style="text-decoration: none; color: inherit;">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}">
                    <div class="news-content">
                        <h4>{{ $item->judul }}</h4>
                        <p>{{ Str::limit($item->deskripsi, 60) }}</p>
                        <div class="news-footer">
                            <span class="badge">{{ $item->kategori }}</span>
                            <span class="date">{{ $item->created_at->format('d-m-Y') }}</span>
                        </div>
                    </div>
                </a>
            </div>

            @if($loop->last)
                </div>
            </div>
            <div class="btn-container">
                <a href="{{ route('pages.berita') }}"><button class="btn-primary">Lihat semua</button></a>
            </div>
            @endif
        @empty
            <div style="text-align: center; color: #777777; padding: 2rem 0;">
                <p>Berita belum ditambahkan.</p>
            </div>
        @endforelse
    </section>

    <!-- Section FAQ -->
    <section id="faq" class="faq-section">
        <h2>FAQ</h2>
        <div class="faq-accordion">
            <details>
                <summary>Siapa yang dapat menggunakan website ini? <span class="icon">+</span></summary>
                <p>Website ini dirancang untuk digunakan oleh admin sekolah, guru, dan siswa sebagai media pengelolaan serta akses informasi sekolah.</p>
            </details>
            <details>
                <summary>Bagaimana cara mengakses informasi berita terbaru? <span class="icon">+</span></summary>
                <p>Pengunjung umum dapat melihat ringkasan berita di landing page ini atau mengklik tombol "Lihat Semua".</p>
            </details>
            <details>
                <summary>Apakah pengunjung biasa harus melakukan login? <span class="icon">+</span></summary>
                <p>Tidak, seluruh pengunjung publik dapat langsung mengakses informasi tanpa perlu login.</p>
            </details>
        </div>

        <div class="contact-banner">
            <h3>Masih ada pertanyaan?</h3>
            <button class="btn-white">Hubungi Kami</button>
        </div>
    </section>
@endsection