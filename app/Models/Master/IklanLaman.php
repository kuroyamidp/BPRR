<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IklanLaman extends Model
{
    use HasFactory;

    protected $table = "iklan_lamen";
    protected $fillable = [
        'title',
        'kategberita_id',
        'tag',
        'banner',
        'content',
    ];

    public function berita()
    {
        return $this->belongsTo(KategoriIklan::class, 'kategiklan_id');
    }

    protected $appends = ['nama_kateg_iklan'];

    public function getNamaKategBeritaAttribute()
    {
        if (array_key_exists('kategiklan_id', $this->attributes)) {
            $kat = DB::table('kategori_iklans')
                    ->select('kategori')
                    ->where('id', $this->attributes['kategiklan_id'])
                    ->first();

            if ($kat) {
                return $kat->kategori;
            }
        }

        return null;
    }
}
