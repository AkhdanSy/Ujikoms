<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'bintang' => 'required|integer|min:1|max:5',
        ]);

        Rating::create([
            'bintang' => $request->bintang,
        ]);

        return back()->with('rating_success', 'Terima kasih! Rating kamu berhasil dikirim.');
    }
}
