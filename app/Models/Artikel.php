<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = "artikel";
    protected $primaryKey = "id";

     protected $fillable = [
        'judul_artikel',
        'jenis_artikel',
        'deskripsi_artikel',
        'path_file',
        
    ];

}
