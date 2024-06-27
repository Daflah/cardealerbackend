<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnggulanMobil extends Model
{
    use HasFactory;

    protected $table = "unggulan_mobils";
    protected $primaryKey = "id";
    protected $fillable = [
        'gambarmobil',
        'nama',
    ];
}
