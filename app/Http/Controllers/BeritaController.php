<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $Beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('Beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi'      => 'required',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul'    => $request->judul,
            'kategori' => $request->kategori,
            'isi'      => $request->isi,
            'gambar'   => $gambarPath,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }
    public function edit(Berita $Berita)
    {
        return view('admin.berita.edit', compact('berita')); 
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'kategori' => 'required|string',
            'isi'      => 'required',
            'gambar'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = [
            'judul'    => $request->judul,
            'kategori' => $request->kategori,
            'isi'      => $request->isi,
        ];

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
