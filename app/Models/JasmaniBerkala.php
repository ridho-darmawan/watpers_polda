<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasmaniBerkala extends Model
{
    use HasFactory;

    protected $table = "jasmaniberkala";
    protected $primaryKey = "id";

    protected $fillable = [
        'id_user',
        'golongan',
        'lari_12_menit',
        'gerakan_pull_up',
        'gerakan_push_up',
        'gerakan_sit_up',
        'putaran_shuttle_run',
        'nilai_rata_rata',
        'nilai_akhir',
        'semester',
        
    ];


     
}
