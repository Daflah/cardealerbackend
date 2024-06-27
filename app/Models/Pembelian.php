<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = "pembelians";
    protected $primaryKey = "id";
    protected $fillable = [
        'email_address',
        'card_number',
        'card_holder_name',
        'expiration_date',
        'cvv',
        'country',
        'zip_code',
    ];
}
