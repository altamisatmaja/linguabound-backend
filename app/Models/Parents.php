<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $table = "parent";

    protected $fillable = [
        'nama_lengkap',
        'kode',
        'user_id',
    ];
}
