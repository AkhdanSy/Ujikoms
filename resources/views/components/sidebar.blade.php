<aside class="sidebar">
    <div class="sidebar-top">
        <div class="brand">
            <img src="{{ asset('assets/logo.svg') }}" alt="Logo SMKN 4 Bogor" class="logo">
            <span class="brand-title">SMKN 4 Bogor</span>
        </div>

        <nav class="nav-menu">
            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-border-all"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.berita.index') }}" class="nav-item {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                <i class="fa-regular fa-newspaper"></i>
                <span>Berita</span>
            </a>
        </nav>
    </div>

    <div class="sidebar-bottom">
        <a href="{{ route('admin.akun') }}" class="nav-item {{ request()->routeIs('admin.akun') ? 'active' : '' }}">
            <i class="fa-regular fa-user"></i>
            <span>Akun</span>
        </a>
        <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="nav-item logout" style="width: 100%; border: none; background: none; cursor: pointer; text-align: left;">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</aside>