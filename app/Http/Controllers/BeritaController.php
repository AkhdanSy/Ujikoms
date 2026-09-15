<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi'=> 'required',
            'kategori' => 'required|string',
            'kategori_lainnya' => 'nullable|required_if:kategori,Lainnya|string|max:50',
        ]);

        $kategoriFinal = $request->kategori === 'Lainnya' ? $request->kategori_lainnya : $request->kategori;
        $gambarPath = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul'    => $request->judul,
            'gambar'   => $gambarPath,
            'deskripsi'=> $request->deskripsi,
            'kategori' => $kategoriFinal,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    }
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita')); 
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'gambar'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi'=> 'required|string',
            'kategori' => 'required|string',
            'kategori_lainnya' => 'nullable|required_if:kategori,Lainnya|string|max:50',
        ]);

        $kategoriFinal = $request->kategori === 'Lainnya' ? $request->kategori_lainnya : $request->kategori;
        $gambarPath = $berita->gambar;

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update ([
            'judul'    => $request->judul,
            'gambar'   => $gambarPath,
            'deskripsi'=> $request->deskripsi,
            'kategori' => $kategoriFinal,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
