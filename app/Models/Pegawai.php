<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawais";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'gambar',   
        'nama', 
        'alamat', 
        'tgllhr',
        'nim'
    ];

    public $timestamps = true;
}
