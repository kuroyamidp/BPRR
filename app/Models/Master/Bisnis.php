<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bisnis extends Model
{
    use HasFactory;
    protected $table = "bisnis";
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
    ];
}
