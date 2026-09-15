<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $beritas = Berita::latest()->take(3)->get();
        $galeris = Galeri::latest()->take(3)->get();
        return view('pages.home', compact('beritas', 'galeris'));
    }

    public function berita() {
        $beritasByKategori = Berita::latest()->get()->groupBy('kategori');
        return view('pages.berita', compact('beritasByKategori'));
    }

    public function detailBerita($id) {
        $berita = Berita::findOrFail($id);
        return view('pages.detail-berita', compact('berita'));
    }

    public function galeri() {
        $galeris = Galeri::latest()->get();
        return view('pages.galeri', compact('galeris'));
    }

    public function detailGaleri($id) {
        $galeri = Galeri::findOrFail($id);
        return view('pages.detail-galeri', compact('galeri'));
    }
}
