<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class BprModel extends Model
{
    use HasFactory;
    protected $table = "bprs";
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
    ];
}
