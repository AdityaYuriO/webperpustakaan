<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrasiController extends Controller
{
    public function index() {
        return view('auth.registrasi');
    }

    public function store( Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            ''
        ]);
    }
}
