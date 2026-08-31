<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk ke Admin - SMKN 4 Bogor</title>
  
  <!-- CSS File -->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

  <div class="login-container">

    <!-- Kolom Kiri: Gambar Banner -->
    <div class="image-banner">
      <img src="{{ asset('assets/smkn4bogor (1).jpg') }}" alt="Gedung Sekolah">
    </div>

    <!-- Kolom Kanan: Form Login -->
    <div class="form-section">

      <h1 class="login-title">Masuk ke Admin</h1>

      <!-- Pesan Error Gagal Login -->
      @if(session('error'))
        <div style="background-color: #fee2e2; color: #dc2626; padding: 0.75rem 1rem; border-radius: 8px; font-size: 0.875rem; margin-bottom: 1rem;">
          {{ session('error') }}
        </div>
      @endif

      <form class="login-form" action="{{ route('login') }}" method="POST">
        @csrf

        <!-- Input Email -->
        <div class="form-group">
          <label for="email">Alamat email</label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="email" 
            value="{{ old('email') }}" 
            required 
            autofocus
          >
          @error('email')
            <span style="color: #dc2626; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Input Password -->
        <div class="form-group">
          <label for="password">Kata sandi</label>
          <div class="password-wrapper">
            <input 
              type="password" 
              id="password" 
              name="password" 
              placeholder="Kata sandi" 
              required
            >
            <button type="button" class="btn-toggle-password" id="togglePasswordBtn">
              <i data-lucide="eye-off" id="eyeIcon"></i>
            </button>
          </div>
          @error('password')
            <span style="color: #dc2626; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Lupa Akun -->
        <div class="forgot-wrapper">
          <span>Anda lupa akun? </span>
          <a href="#">Hubungi kami</a>
        </div>

        <!-- Tombol Masuk -->
        <button type="submit" class="btn-submit">Masuk</button>

        <!-- Checkbox Syarat & Ketentuan -->
        <div class="terms-wrapper">
          <input type="checkbox" id="terms" checked required>
          <label for="terms">Saya setuju dengan syarat & ketentuan.</label>
        </div>

      </form>

    </div>

  </div>

  <!-- JavaScript File -->
  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>