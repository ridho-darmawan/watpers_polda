<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPengajuan extends Model
{
    use HasFactory;

    protected $table = "jenis_pengajuan";
    protected $primaryKey = "id";

     protected $fillable = [
        'id_kategori',
        'syarat',
        'nama',
        
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriPelayanan::class, 'id_kategori', 'id');
    }

}
