<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AuthController;
use App\Http\controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\GaleriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [HomeController::class, 'berita'])->name('pages.berita');
Route::get('/berita/{id}', [HomeController::class, 'detailBerita'])->name('pages.detail-berita');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('pages.galeri');
Route::get('/galeri/{id}', [HomeController::class, 'detailGaleri'])->name('pages.detail-galeri');
Route::post('/kontak/kirim', [PesanController::class, 'store'])->name('kontak.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->withoutMiddleware('admin.'); 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('berita', BeritaController::class)->parameters([
        'berita'=>'berita'
    ]);
    Route::resource('galeri', GaleriController::class)->parameters([
        'galeri'=>'galeri'
    ]);

    Route::get('/kontak', [PesanController::class, 'index'])->name('kontak.index');
    Route::patch('/kontak/{id}/status', [PesanController::class, 'updateStatus'])->name('kontak.update-status');
    Route::delete('/kontak/{id}', [PesanController::class, 'destroy'])->name('kontak.destroy');

    Route::get('/akun', [DashboardController::class, 'akun'])->name('akun');
    Route::put('/akun/email', [DashboardController::class, 'updateEmail'])->name('akun.update-email');
    Route::put('/akun/password', [DashboardController::class, 'updatePassword'])->name('akun.update-password');
});

Route::post('/kontak/kirim', [PesanController::class, 'store'])->name('kontak.store');

