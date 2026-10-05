<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke Admin - SMKN 4 Bogor</title>
    <!-- Bootstrap 5 via Vite -->
    @vite(['resources/js/app.js'])
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="shortcut icon" href="../assets/Subtract.png" type="image/x-icon">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body class="bg-light min-vh-100 d-flex align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="row g-0">
                        <!-- Kolom Kiri: Gambar Banner -->
                        <div class="col-md-6 d-none d-md-block">
                            <img src="{{ asset('assets/smkn4bogor (1).jpg') }}" 
                                 alt="Gedung Sekolah" 
                                 class="img-fluid h-100 w-100 object-fit-cover">
                        </div>
                        <!-- Kolom Kanan: Form Login -->
                        <div class="col-md-6 p-4 p-lg-5 d-flex flex-column justify-content-center bg-white">
                            <div class="mb-3">
                                <a href="{{ route('home') }}" class="text-decoration-none text-secondary d-inline-flex align-items-center gap-2 small link-primary fw-medium">
                                    <i data-lucide="arrow-left" style="width: 18px; height: 18px;"></i>
                                </a>
                            </div>
                            <h2 class="fw-bold text-dark mb-4">Masuk ke Admin</h2>
                            <!-- Pesan Error Gagal Login -->
                            @if(session('error'))
                                <div class="alert alert-danger rounded-3 border-0 small mb-3" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <!-- Input Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label small fw-medium text-secondary">Alamat email</label>
                                    <input 
                                        type="email" 
                                        class="form-control form-control-lg rounded-3 fs-6 @error('email') is-invalid @enderror" 
                                        id="email" 
                                        name="email" 
                                        placeholder="email" 
                                        value="{{ old('email') }}" 
                                        required 
                                        autofocus
                                    >
                                    @error('email')
                                        <div class="invalid-feedback small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Input Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label small fw-medium text-secondary">Kata sandi</label>
                                    <div class="input-group">
                                        <input 
                                            type="password" 
                                            class="form-control form-control-lg rounded-start-3 fs-6 @error('password') is-invalid @enderror" 
                                            id="password" 
                                            name="password" 
                                            placeholder="Kata sandi" 
                                            required
                                        >
                                        <button class="btn btn-outline-secondary rounded-end-3 px-3 d-flex align-items-center" type="button" id="togglePasswordBtn">
                                            <i data-lucide="eye-off" id="eyeIcon" style="width: 18px; height: 18px;"></i>
                                        </button>
                                        @error('password')
                                            <div class="invalid-feedback small d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Lupa Akun -->
                                <div class="mb-4 small">
                                    <span class="text-secondary">Anda lupa akun? </span>
                                    <a href="#" class="text-primary text-decoration-none fw-medium">Hubungi kami</a>
                                </div>
                                <!-- Tombol Masuk -->
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-3 fs-6 fw-semibold mb-3">
                                    Masuk
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();
    </script>
</body>
</html>