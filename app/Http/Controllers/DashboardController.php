<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalBerita = Berita::count();
        $beritaTerbaru = Berita::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalBerita', 'beritaTerbaru'));
    }

    public function akun(){
        return view('admin.akun');
    }

    public function updateEmail(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users,email,'. auth()->id(),
        ]);

        /** @var User $user */
        $user = auth()->user();
        $user->update([
            'email' => $request->email,
        ]); 

        return back()->with('success','alamat email berhasil diperbarui');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'password' => 'required|min:6',
        ]);

        /** @var user $user */
        $user = auth()->user();
        $user->update([
            'password' => Hash::make($request->password),
        ]); 

        return back()->with('success','kata sandi berhasil diperbarui');
    }
}
