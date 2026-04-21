<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email','password'))) {

            $user = Auth::user();

            if ( $user->role == 'anggota' ) {
                return redirect()->Route('beranda.utama');
            }

            if ( $user->role == 'petugas' ) {
                return redirect()->route('halaman.petugas');
            }

            return back()->with('failed', 'kamu gak punya akses');
        }
    }
}
