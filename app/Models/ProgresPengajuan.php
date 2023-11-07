<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresPengajuan extends Model
{
    use HasFactory;

    protected $table = "progres_pengajuan";
    protected $primaryKey = "id";

     protected $fillable = [
        'id_pengajuan',
        'status',
        'keterangan',
        
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan', 'id');
    }

}
