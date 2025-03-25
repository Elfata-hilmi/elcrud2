<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'pegawai';

    // Nama kolom primary key
    protected $primaryKey = 'kodepegawai';

    // Tipe data primary key (string karena kodepegawai adalah string)
    protected $keyType = 'string';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'kodepegawai',
        'namapegawai',
        'kerja_bagian'
    ];
}
