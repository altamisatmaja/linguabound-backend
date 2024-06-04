<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBagian extends Model
{
    use HasFactory;

    protected $table = "sub_bagian";

    protected $fillable = [
        'nama_sub_bagian',
        'nilai_maks',
        'bagian_id',
    ];
}
