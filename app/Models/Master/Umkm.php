<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = "umkms";
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
    ];
}
