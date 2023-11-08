<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengecekanKesehatan extends Model
{
    use HasFactory;

    protected $table = "pengecekankesehatan";
    protected $primaryKey = "id";

    protected $fillable = [
        'judul_artikel',
        'deskripsi_artikel',
        'foto_artikel',
        
    ];

    public $timestamps = false;

     
}
