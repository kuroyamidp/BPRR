<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $table = "koperasis";
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
    ];
}
