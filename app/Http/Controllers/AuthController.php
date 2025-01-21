<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role == 'admin') {
                Alert::success('Success', 'Login success!');
                return redirect()->intended('/Admin/welcome');
            } elseif ($user->role == 'pelanggan') {
                Alert::success('Success', 'Login success!');
                return redirect()->intended('/User/home');
            }
        }

        Alert::error('Error', 'Mohon Periksa email dan password anda!');
        return redirect('/login')->withInput();
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'passwordConfirm' => 'required|same:password'
        ]);

        $validated['password'] = Hash::make($request['password']);
        $validated['role'] = 'pelanggan'; // Set default role to user

        $user = user::create($validated);

        Alert::success('Success', 'Register pelanggan berhasil!');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Success', 'Logout berhasil!');
        return redirect('/');
    }

}
