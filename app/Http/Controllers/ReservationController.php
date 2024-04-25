<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    public function index()
    {
        return view('User.reservation');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('warning', 'Silahkan Login atau Register untuk membuat reservasi.');
        }
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'medsos' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'event' => 'required',
            'jumlah_anggota' => 'required',
        ]);
        
        $reservation = Reservation::create([
           'name' => $request -> name, 
           'tanggal' => $request -> tanggal, 
           'waktu' => $request -> waktu, 
           'medsos' => $request -> medsos, 
           'address' => $request -> address, 
           'phone_number' => $request -> phone_number, 
           'event' => $request -> event, 
           'jumlah_anggota' => $request -> jumlah_anggota, 
        ]);

        var_dump(session()->all());
        
        if ($reservation) {
            return redirect()->back()->with('success', 'Reservasi Berhasil Dibuat.');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat reservasi.');
        }
}   
}