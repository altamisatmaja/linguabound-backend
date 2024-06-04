<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetMember extends Model
{
    use HasFactory;

    protected $table = "meet_member";

    protected $fillable = [
        'meet_id',
        'remaja_id',
    ];
}
