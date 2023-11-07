<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParQTest extends Model
{
    use HasFactory;

    protected $table = "par_q";
    protected $primaryKey = "id";

     protected $fillable = [
        'nama',
        'nrp',
        'pertanyaan1',
        'pertanyaan2',
        'pertanyaan3',
        'pertanyaan4',
        'pertanyaan5',
        'pertanyaan6',
        'pertanyaan7',
        
    ];

    public $timestamps = false;
}
