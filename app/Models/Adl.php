<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adl extends Model
{
    use HasFactory;

    protected $table = "adl";
    protected $primaryKey = "id";

     protected $fillable = [
        'id_user',
        'pertanyaan1',
        'pertanyaan2',
        'pertanyaan3',
        'pertanyaan4',
        'pertanyaan5',
        'pertanyaan6',
        'pertanyaan7',
        'pertanyaan8',
        'pertanyaan9',
        'pertanyaan10',
        
    ];

}
