<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manusia extends Model
{
    use HasFactory;
    protected $table="users";
    protected $fillable = [
        'name',
        'NIM',
        'profile_photo_path',
        'message'
    ];
}