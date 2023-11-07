<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebugaran extends Model
{
    use HasFactory;

    protected $table = "kebugaran";
    protected $primaryKey = "id";

     protected $fillable = [
        'nama',
        'nrp',
        'tinggi',
        'berat',
        'tekanan_darah',
        'gula_darah',
        'kolestrol',
        
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
