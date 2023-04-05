<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriIklan extends Model
{
    use HasFactory;
    protected $table = "kategori_iklans";
    protected $fillable = [
        'kategori',
    ];
}
