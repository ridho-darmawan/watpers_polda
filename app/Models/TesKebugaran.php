<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesKebugaran extends Model
{
    use HasFactory;

    protected $table = "teskebugaran";
    protected $primaryKey = "id";

    protected $fillable = [
        'id_user',
        'jarak',
        'waktu',
        
    ];

    public $timestamps = false;

     
}
