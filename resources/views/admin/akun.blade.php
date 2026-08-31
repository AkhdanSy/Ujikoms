@extends('layouts.admin')

@section('title', 'Pengaturan Akun - Admin SMKN 4 Bogor')

@push('styles')
<style>
    .account-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .account-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .account-card h2 {
        font-size: 1.35rem;
        font-weight: 700;
        color: #3572ef;
        margin-bottom: 0.2rem;
    }

    .account-card p.subtitle {
        color: #64748b;
        font-size: 0.9rem;
        margin-bottom: 1.25rem;
    }

    .form-group-account {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .input-account {
        width: 100%;
        padding: 0.75rem 1rem;
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 10px;
        font-size: 0.95rem;
        outline: none;
        transition: border-color 0.2s;
    }

    .input-account:focus {
        border-color: #3572ef;
    }

    .btn-account-submit {
        align-self: flex-end;
        background: #3572ef;
        color: #ffffff;
        border: none;
        padding: 0.6rem 1.8rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    .btn-account-submit:hover {
        background: #2558c9;
    }

    .alert-success {
        background: #dcfce7;
        color: #166534;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        margin-bottom: 1rem;
    }

    @media (max-width: 900px) {
        .account-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Dashboard</h1>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="account-grid">
        <!-- Card 1: Ganti Alamat Email -->
        <div class="account-card">
            <h2>Alamat email</h2>
            <p class="subtitle">Ganti alamat email</p>

            <form action="{{ route('admin.akun.update-email') }}" method="POST" class="form-group-account">
                @csrf
                @method('PUT')
                <input 
                    type="email" 
                    name="email" 
                    class="input-account" 
                    value="{{ old('email', auth()->user()->email ?? '') }}" 
                    required
                >
                @error('email')
                    <span style="color: #ef4444; font-size: 0.8rem;">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn-account-submit">Ganti</button>
            </form>
        </div>

        <!-- Card 2: Ganti Kata Sandi -->
        <div class="account-card">
            <h2>Kata sandi</h2>
            <p class="subtitle">Ganti kata sandi</p>

            <form action="{{ route('admin.akun.update-password') }}" method="POST" class="form-group-account">
                @csrf
                @method('PUT')
                <input 
                    type="password" 
                    name="password" 
                    class="input-account" 
                    placeholder="Masukkan kata sandi baru" 
                    required
                >
                @error('password')
                    <span style="color: #ef4444; font-size: 0.8rem;">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn-account-submit">Ganti</button>
            </form>
        </div>
    </div>
@endsection