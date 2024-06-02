<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table_name = "mentor";

    protected $fillable = [
        'nama_lengkap',
        'gelar',
        'riwayat_pendidikan_terakhir',
        'user_id',
    ];
}
