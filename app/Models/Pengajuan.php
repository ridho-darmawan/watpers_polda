<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = "pengajuan";
    protected $primaryKey = "id";

     protected $fillable = [
        'id_user',
        'id_jenis_pengajuan',
        'file_syarat',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function JenisPengajuan()
    {
        return $this->belongsTo(JenisPengajuan::class, 'id_jenis_pengajuan', 'id');
    }

}
