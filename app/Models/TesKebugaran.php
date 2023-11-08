<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesKebugaran extends Model
{
    use HasFactory;

    protected $table = "tes_kebugaran";
    protected $primaryKey = "id";

    protected $fillable = [
        'id_user',
        'jarak',
        'jam',
        'menit',
        'detik',
        'kecepatan',
        'jumlah_langkah',
        
    ];

     
}
