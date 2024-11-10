<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $role = $request->input('as_a');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == $role) {
                Session::put('id_akun', $user->id);
                Session::put('role', $user->role);
                Session::put('username', $user->username);
                Session::put('fullname', $user->nama_lengkap);

                if ($user->role == 1) {
                    return redirect()->intended('beranda_pencari');
                } elseif ($user->role == 2) {
                    return redirect()->intended('beranda_pemkos');
                } else {
                    return redirect()->back()->withErrors(['access' => 'Anda tidak memiliki akses']);
                }
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['role' => 'Role tidak sesuai']);
            }
        } else {
            return redirect()->back()->withErrors(['credentials' => 'Username atau password salah']);
        }
    }
}
