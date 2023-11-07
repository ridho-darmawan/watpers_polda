<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gds extends Model
{
    use HasFactory;

    protected $table = "gds";
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
        'pertanyaan11',
        'pertanyaan12',
        'pertanyaan13',
        'pertanyaan14',
        'pertanyaan15',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
