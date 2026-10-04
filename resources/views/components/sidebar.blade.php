<aside class="d-flex flex-column justify-content-between bg-white border-end vh-100 p-3" style="width: 260px; position: fixed; top: 0; left: 0; z-index: 1000;">
    <!-- Sidebar Top Group -->
    <div>
        <!-- Brand Logo -->
        <div class="d-flex align-items-center gap-2 px-2 py-3 mb-4 border-bottom">
            <img src="{{ asset('assets/Subtract.png') }}" alt="Logo XaoLery" width="32" height="32">
            <span class="fw-bold text-primary fs-5">XaoLery</span>
        </div>

        <!-- Navigation Menu -->
        <nav class="nav nav-pills flex-column gap-2">
            <a href="{{ route('admin.dashboard') }}" 
               class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3 fw-medium {{ request()->routeIs('admin.dashboard') ? 'active bg-primary text-white' : 'text-secondary bg-transparent' }}">
                <i class="fa-solid fa-border-all fs-5"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.berita.index') }}" 
               class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3 fw-medium {{ request()->routeIs('admin.berita.*') ? 'active bg-primary text-white' : 'text-secondary bg-transparent' }}">
                <i class="fa-regular fa-newspaper fs-5"></i>
                <span>Berita</span>
            </a>
            <a href="{{ route('admin.galeri.index') }}" 
               class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3 fw-medium {{ request()->routeIs('admin.galeri.*') ? 'active bg-primary text-white' : 'text-secondary bg-transparent' }}">
                <i class="fa-regular fa-image fs-5"></i>
                <span>Galeri</span>
            </a>
        </nav>
    </div>

    <!-- Sidebar Bottom Group -->
    <div class="pt-3">
        <nav class="nav nav-pills flex-column gap-2 mb-2">
            <a href="{{ route('admin.akun') }}" 
               class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3 fw-medium {{ request()->routeIs('admin.akun') ? 'active bg-primary text-white' : 'text-secondary bg-transparent' }}">
                <i class="fa-regular fa-user fs-5"></i>
                <span>Akun</span>
            </a>
        </nav>
        
        <form action="{{ route('admin.logout') }}" method="POST" class="w-100 border-top">
            @csrf
            <button type="submit" class="btn btn-link nav-link d-flex align-items-center gap-3 px-3 pb-2 pt-4 rounded-3 fw-medium text-danger w-100 text-start text-decoration-none">
                <i class="fa-solid fa-arrow-right-from-bracket fs-5"></i>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</aside>