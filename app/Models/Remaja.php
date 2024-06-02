<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remaja extends Model
{
    use HasFactory;

    protected $table = "remaja";

    protected $fillable = [
        'nama_orang_tua',
        'exp',
        'star',
        'level',
        'kode_orang_tua',
        'user_id',
        'username',
        'orang_tua_id',
    ];
}
