<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\peminjaman;

class petugasController extends Controller
{
    public function index() {
        $user = Auth::user();
        $peminjam = peminjaman::all();
        return view('petugas', compact('user','peminjam'));
    }

    public function create() {
        return view('/createPetugas');
    }

    public function store(Request $request ) {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomor_gawai' => 'required',
            'judul' => 'required',
            'jenis_buku' => 'required',
        ]);

        peminjaman::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nomor_gawai' => $request->nomor_gawai,
            'judul' => $request->judul,
            'jenis_buku' => $request->jenis_buku,
        ]);

        return redirect()->route('halaman.petugas')->with('success', 'peminjam di tambah');

    }

    public function destroy( String $id) {
        $peminjam = peminjaman::FindOrFail($id);
        $peminjam->delete();

        return redirect()->route('halaman.petugas')->with('success','data berhasil di hapus');


    }
}
