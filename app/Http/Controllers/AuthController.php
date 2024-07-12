<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    

    // Method untuk menampilkan halaman pendaftaran akun
    public function DaftarAkun()
    {
        return view('register');  
    }

    // Method untuk proses pendaftaran
    public function register(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    // AuthController.php

public function showRegistrationForm()
{
    return view('register');  // Pastikan sesuai dengan path dan nama view yang Anda gunakan
}


    // Method untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); 
    }

    // Method untuk proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect()->intended(route('home')); 
        } else {
            
            return redirect()->route('login')->with('error', 'Invalid credentials'); 
        }
    }

    // Method untuk proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('register');

    }     
    // Method untuk menangani pengalihan setelah login berhasil
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended(route('home')); 
    }
}
