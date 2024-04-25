<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Auth.register');
    }
    
    public function process(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'passwordConfirm' => 'required|same:password'
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    
    return redirect()->route('login')->with('success', 'Registrasi Berhasil!!');
    }

    
    // Menampilkan halaman Login
    public function showLoginForm() 
    {
        return view('Auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectTo());
        }
        return redirect()->back()->withErrors(['email', 'password' => 'Email atau Password Anda Salah, Mohon periksa Kembali!'])->withInput();
    }

    protected function redirectTo() {
        $role = Auth::user()->role;
        if ($role === 'admin') {
            return '/Admin/welcome';
        } elseif ($role === 'pelanggan') {
            return '/User/home';
        }
        return '/';
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
}