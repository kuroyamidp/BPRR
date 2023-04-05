<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BeritaSorotan extends Model
{
    use HasFactory;

    protected $table = "berita_sorotans";
    protected $fillable = [
        'title',
        'kategberita_id',
        'tag',
        'banner',
        'content',
    ];

    public function berita()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategberita_id');
    }

    protected $appends = ['nama_kateg_berita'];

    public function getNamaKategBeritaAttribute()
    {
        if (array_key_exists('kategberita_id', $this->attributes)) {
            $kat = DB::table('kategori_beritas')
                    ->select('kategori')
                    ->where('id', $this->attributes['kategberita_id'])
                    ->first();

            if ($kat) {
                return $kat->kategori;
            }
        }

        return null;
    }
}
