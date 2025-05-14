<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'minumans'; 
    protected $fillable = [
        'nama', 'stok', 'deskripsi', 'harga', 'foto'
    ];
}
