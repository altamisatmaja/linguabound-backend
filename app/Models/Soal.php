<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table_name = 'soal';

    protected $fillable = [
        'pertanyaan',
        'sub_bagian_id',
    ];
}
