<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laman extends Model
{
    use HasFactory;
    protected $table = "lamen";
    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'title',
        'banner',
        'content',
    ];
}
