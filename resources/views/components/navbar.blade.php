<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
    <div class="container">
        <!-- Logo & Brand Title -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}#beranda">
            <img src="{{ asset('assets/Subtract.png') }}" alt="Logo XaoLery" width="36" height="36" class="d-inline-block align-text-top">
            <span class="fw-bold text-primary fs-5">XaoLery</span>
        </a>

        <!-- Tombol Hamburger (Muncul di Layar HP/Tablet) -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-lg-3 fw-medium my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('home') }}#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('home') }}#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('home') }}#siswa">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('home') }}#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('home') }}#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('home') }}#faq">Kontak</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <a href="{{ route('login') }}" class="btn text-primary rounded px-4 py-2 fw-semibold">
                    Masuk
                </a>
            </div>
        </div>
    </div>
</nav>