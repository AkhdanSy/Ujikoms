<footer class="bg-white border-top pt-5 pb-4">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row g-4 justify-content-between pb-4 border-bottom">
            
            <!-- Brand & Social Icons -->
            <div class="col-lg-4 col-md-6">
                <a class="navbar-brand d-flex align-items-center gap-2 mb-3" href="{{ route('home') }}#beranda">
                    <img src="{{ asset('assets/Subtract.png') }}" alt="Logo XaoLery" width="36" height="36">
                    <span class="fw-bold text-primary fs-5">XaoLery</span>
                </a>
                <p class="text-secondary small mb-3">
                    SMKN 4 Bogor — tempat mimpi dimulai, keterampilan diasah, dan masa depan dibentuk.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-sm btn-light text-primary rounded-circle" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-sm btn-light text-primary rounded-circle" aria-label="Google"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="btn btn-sm btn-light text-primary rounded-circle" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="btn btn-sm btn-light text-primary rounded-circle" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-sm btn-light text-primary rounded-circle" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <!-- Links Navigasi -->
            <div class="col-lg-1 col-md-6 col-6">
                <h6 class="fw-bold text-dark mb-3">Navigasi</h6>
                <div class="d-flex flex-column gap-2 small">
                    <a href="{{ route('home') }}#beranda" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Beranda</a>
                    <a href="{{ route('home') }}#tentang" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Tentang</a>
                    <a href="{{ route('home') }}#siswa" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Siswa</a>
                    <a href="{{ route('home') }}#berita" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Berita</a>
                    <a href="{{ route('home') }}#galeri" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Galeri</a>
                    <a href="{{ route('home') }}#faq" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">FAQ</a>
                </div>
            </div>

            <div class="col-lg-1 col-md-6 col-6">
                <h6 class="fw-bold text-dark mb-3">Jurusan</h6>
                <div class="d-flex flex-column gap-2 small">
                    <a href="{{ route('home') }}#siswa" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">PPLG</a>
                    <a href="{{ route('home') }}#siswa" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">TJKT</a>
                    <a href="{{ route('home') }}#siswa" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">TP</a>
                    <a href="{{ route('home') }}#siswa" class="text-decoration-none text-secondary link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">TO</a>
                </div>
            </div>

            <!-- Kontak -->
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="fw-bold text-dark mb-3">Kontak</h6>
                <div class="d-flex flex-column gap-2 small text-secondary">
                    <p class="mb-0"><i class="fa-solid fa-phone text-primary me-2"></i>+62 823 1076 8523</p>
                    <p class="mb-0"><i class="fa-solid fa-envelope text-primary me-2"></i>xiaoqitechy@mail.com</p>
                    <p class="mb-0"><i class="fa-solid fa-location-dot text-primary me-2"></i>Jl. Raya Tajur, Kp. Buntar RT.02/RW.08, Kel. Muara sari, Kec. Bogor Selatan, RT.03/RW.08, Muarasari, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16137</p>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 small text-secondary gap-2">
            <p class="mb-0">© 2026 XaoLery. Seluruh hak cipta dilindungi.</p>
        </div>
    </div>
</footer>