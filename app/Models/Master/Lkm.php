<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lkm extends Model
{
    use HasFactory;
    protected $table = "lkms";
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
    ];
}
