<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jualan extends Model
{
    use HasFactory;

    protected $table = "jualans";
    protected $primaryKey = "id";
    protected $fillable = [
        'gambar',
        'merk',
        'namamobil',
        'type',
        'transmission',
        'bensin',
        'harga'
    ];
}
