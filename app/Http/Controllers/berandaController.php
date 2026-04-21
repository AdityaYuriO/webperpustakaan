<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\peminjaman;

class berandaController extends Controller
{
    public function index() {
        $peminjam = peminjaman::all();
        $user = Auth::user();
        return view('beranda', compact('user','peminjam'));
    }
}
