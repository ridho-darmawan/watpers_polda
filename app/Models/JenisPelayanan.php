<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPelayanan extends Model
{
    use HasFactory;

    protected $table = "kategori_pelayanan";
    protected $primaryKey = "id";

     protected $fillable = [
        'nama',
        
    ];

}
