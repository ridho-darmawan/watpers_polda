<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beladiri extends Model
{
    use HasFactory;
    protected $table = "beladiri";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama',
        'nrp',
        'jumlah_teknik_dasar_jatuh1',
        'tgerak_teknik_dasar_jatuh1',
        'sgerak_teknik_dasar_jatuh1',
        'motivasi_teknik_dasar_jatuh1',
        'penampilan_teknik_dasar_jatuh1',
        'ket_teknik_dasar_jatuh1',
        'jumlah_teknik_dasar_jatuh2',
        'tgerak_teknik_dasar_jatuh2',
        'sgerak_teknik_dasar_jatuh2',
        'motivasi_teknik_dasar_jatuh2',
        'penampilan_teknik_dasar_jatuh2',
        'ket_teknik_dasar_jatuh2',
        'jumlah_teknik_dasar_jatuh3',
        'tgerak_teknik_dasar_jatuh3',
        'sgerak_teknik_dasar_jatuh3',
        'motivasi_teknik_dasar_jatuh3',
        'penampilan_teknik_dasar_jatuh3',
        'jumlah_teknik_dasar_jatuh4' ,                
        'tgerak_teknik_dasar_jatuh4' ,                    
        'sgerak_teknik_dasar_jatuh4' ,                    
        'motivasi_teknik_dasar_jatuh4',                   
        'penampilan_teknik_dasar_jatuh4' ,                
        'ket_teknik_dasar_jatuh4',
        'jumlah_dasar_beladiri1',
        'tgerak_dasar_beladiri1',
        'sgerak_dasar_beladiri1',
        'motivasi_dasar_beladiri1',
        'penampilan_dasar_beladiri1',
        'ket_dasar_beladiri1',
        'jumlah_dasar_beladiri2',
        'tgerak_dasar_beladiri2',
        'sgerak_dasar_beladiri2',
        'motivasi_dasar_beladiri2',
        'penampilan_dasar_beladiri2',
        'ket_dasar_beladiri2',
        'jumlah_dasar_beladiri3',
        'tgerak_dasar_beladiri3',
        'sgerak_dasar_beladiri3',
        'motivasi_dasar_beladiri3',
        'penampilan_dasar_beladiri3',
        'ket_dasar_beladiri3',
        'jumlah_kombinasiteknik_beladiri1',
        'tgerak_kombinasiteknik_beladiri1',
        'sgerak_kombinasiteknik_beladiri1',
        'motivasi_kombinasiteknik_beladiri1',
        'penampilan_kombinasiteknik_beladiri1',
        'ket_kombinasiteknik_beladiri1',
        'jumlah_kombinasiteknik_beladiri2',
        'tgerak_kombinasiteknik_beladiri2',
        'sgerak_kombinasiteknik_beladiri2',
        'motivasi_kombinasiteknik_beladiri2'  ,
        'penampilan_kombinasiteknik_beladiri2' ,
        'ket_kombinasiteknik_beladiri2'  ,
        'jumlah_kombinasiteknik_beladiri3' ,
        'tgerak_kombinasiteknik_beladiri3'   ,
        'sgerak_kombinasiteknik_beladiri3'    ,
        'motivasi_kombinasiteknik_beladiri3'   ,
        'penampilan_kombinasiteknik_beladiri3' ,
        'ket_kombinasiteknik_beladiri3'  ,
        'rangkaian1' ,           
        'rangkaian2' ,           
        'jumlah' 
        
    ];

    public $timestamps = false;
}
