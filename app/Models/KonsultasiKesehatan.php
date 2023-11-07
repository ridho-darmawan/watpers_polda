<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiKesehatan extends Model
{
    use HasFactory;

    protected $table = "konsultasikehatan";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama',
        'no_hp',
        
    ];

     
}
