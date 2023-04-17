<?php

namespace App\Models\master;

use App\Models\master\BeritaSorotan as MasterBeritaSorotan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sorotan extends Model
{
    use HasFactory;

    protected $table = "sorotans";
    protected $fillable = [
        'title_id',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    public function berita()
    {
        return $this->belongsTo(MasterBeritaSorotan::class, 'title_id');
    }

    protected $appends = ['nama_title_berita'];

    public function getNamaTitleBeritaAttribute()
    {
        if (array_key_exists('title_id', $this->attributes)) {
            $kat = DB::table('berita_sorotans')
                    ->select('title')
                    ->where('id', $this->attributes['title_id'])
                    ->first();

            if ($kat) {
                return $kat->title;
            }
        }

        return null;
    }
    
}
