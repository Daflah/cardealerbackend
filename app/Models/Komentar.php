<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = "komentars";
    protected $primaryKey = "id";
    protected $fillable = [
        'gambarmobil',
        'gambarprofile',
        'nama',
        'job',
        'komentar',
    ];
}