<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $title = "Register";

        return view('auth.register', compact('title'));
    }

    public function logindex(Request $request)
    {
        $title = "Login";

        return view('auth.login', compact('title'));
    }

    public function login(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'is_active' => 1
        ];

        if(!Auth::attempt($data)) return redirect()->back()->withErrors(['name' => 'Username atau password salah!']);
        
        return redirect()->route('dashboard')->with('message', 'Login berhasil!');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'province' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 1,
            'username' => $request->username,
            'gender' => 'Laki-Laki',
            'photo' => 'default.png',
            'password' => Hash::make($request->password),
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'phone' => $request->phone,
            'is_active' => 1,
        ]);

        if(!$user) return redirect()->back()->with('failed', 'Terdapat kesalahan!');
        
        Session::flash('success', 'Akun berhasil diregistrasi!');
        
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
