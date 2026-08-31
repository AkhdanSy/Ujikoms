<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $beritas = Berita::latest()->take(3)->get();
        return view('pages.home', compact('beritas'));
    }

    public function berita() {
        $beritas = Berita::latest()->paginate(6);
        return view('pages.berita', compact('beritas'));
    }

    public function detailBerita($id) {
        $berita = Berita::findOrFail($id);
        return view('pages.detail-berita', compact('berita'));
    }
}
