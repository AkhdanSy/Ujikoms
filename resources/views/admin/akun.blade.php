@extends('layouts.admin')

@section('title', 'Pengaturan Akun - Admin SMKN 4 Bogor')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-secondary m-0">Pengaturan Akun</h1>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row row-cols-1 row-cols-md-2 g-4">
        
        <!-- Form Email -->
        <div class="col">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-primary mb-1">Alamat email</h5>
                        <p class="text-secondary small mb-4">Ganti alamat email utama akun admin Anda.</p>

                        <form action="{{ route('admin.akun.update-email') }}" method="POST" id="formUpdateEmail">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="email" class="form-label small fw-medium text-secondary">Email Baru</label>
                                <input 
                                    type="email" 
                                    id="email"
                                    name="email" 
                                    class="form-control form-control-lg fs-6 rounded-3 @error('email') is-invalid @enderror" 
                                    value="{{ old('email', auth()->user()->email ?? '') }}" 
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </form>
                    </div>

                    <div class="pt-1 text-end">
                        <button type="submit" form="formUpdateEmail" class="btn btn-primary rounded-pill px-4 fw-medium">
                            Ganti Email
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Password -->
        <div class="col">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-primary mb-1">Kata sandi</h5>
                        <p class="text-secondary small mb-4">Ganti kata sandi akun admin Anda secara berkala.</p>

                        <form action="{{ route('admin.akun.update-password') }}" method="POST" id="formUpdatePassword">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="adminPassword" class="form-label small fw-medium text-secondary">Kata Sandi Baru</label>
                                <div class="input-group">
                                    <input 
                                        type="password" 
                                        name="password" 
                                        id="adminPassword" 
                                        class="form-control form-control-lg fs-6 rounded-start-3 @error('password') is-invalid @enderror" 
                                        placeholder="Masukkan kata sandi baru" 
                                        required
                                    >
                                    <button type="button" id="adminTogglePasswordBtn" class="btn btn-outline-secondary rounded-end-3 px-3 d-flex align-items-center">
                                        <i class="fa-regular fa-eye-slash" id="adminEyeIcon"></i>
                                    </button>
                                    @error('password')
                                        <div class="invalid-feedback small d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="pt-1 text-end">
                        <button type="submit" form="formUpdatePassword" class="btn btn-primary rounded-pill px-4 fw-medium">
                            Ganti Kata Sandi
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/akun.js') }}"></script>
@endpush