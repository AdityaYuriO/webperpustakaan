<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->String('nis');
            $table->String('nama');
            $table->String('kelas');
            $table->String('jurusan');
            $table->String('alamat');
            $table->String('jenis_kelamin');
            $table->String('nomor_gawai');
            $table->String('Judul');
            $table->String('jenis_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjam');
    }
};
