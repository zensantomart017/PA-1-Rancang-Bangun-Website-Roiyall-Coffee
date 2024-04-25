<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function UserUlasan()
    {
        $ulasan = Ulasan::all();
        return view('User.ulasan', compact('ulasan'));
    }

    public function ulasan(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'komentar' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi.',
            'email.email' => 'Format email tidak valid',
            'komentar.required' => 'Pesan wajib diisi'
        ]);

        if (auth()->check()) {
            $ulasan = new Ulasan;
            $ulasan->ID_user = auth()->user()->id;
            $ulasan->email = $request->input('email');
            $ulasan->komentar = $request->input('komentar');
            $ulasan->save();

            return redirect()->back()->with('success', 'Komentar Berhasil Dikirim.');
        } else {
            return redirect('/login')->with('error', 'Harus Login terlebih dahulu');
        }
    }
}
