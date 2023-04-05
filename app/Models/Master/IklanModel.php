<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IklanModel extends Model
{
    use HasFactory;
    protected $table = "iklan_models";
    protected $fillable = [
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'gambar',
    ];
}
