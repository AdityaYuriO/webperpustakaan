<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class anggota extends Model
{
    public $table = 'anggota';

    public $fillable = [
        'user_id',
        'nis',
        'kelas',
        'alamat',
        'no_hp',
    ];

    public function user() {
        return $this->belongsTo(user::class);
    }
}
