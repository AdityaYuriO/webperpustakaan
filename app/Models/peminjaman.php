<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public $table = 'peminjaman';

    public $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'alamat',
        'jenis_kelamin',
        'nomor_gawai',
        'judul',
        'jenis_buku',
    ];
}
