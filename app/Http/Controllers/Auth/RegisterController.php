<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:akun',
            'email' => 'required|string|email|max:255|unique:akun',
            'password' => 'required|string|min:8|confirmed',
            'as_a' => 'required|integer',
        ]);

        Akun::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->as_a,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silahkan login.');
    }
}
