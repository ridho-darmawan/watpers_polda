<?php

namespace App\Http\Controllers\api;

use App\Models\Beladiri;
use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class BeladiriController extends Controller
{
    public function index($id_user)
    {
        $beladiri = Beladiri::where('id_user', $id_user)->orderBy('id','desc')->first();

        if($beladiri)
        {
            $tgl_penilaian  = date('m', strtotime($beladiri->created_at));

            if ($tgl_penilaian > 6) {
                $semester = 2;
            }else{
                $semester = 1;
            }
             
            $nilai_beladiri = [
                'teknik_gerak_beladiri' => $beladiri->tgerak_kombinasiteknik_jumlahnilai,
                'sikap_gerak' => $beladiri->sgerak_kombinasiteknik_jumlahnilai,
                'motivasi' => $beladiri->motivasi_kombinasiteknik_jumlahnilai,
                'penampilan' => $beladiri->penampilan_kombinasiteknik_jumlahnilai,
                'semester' => 'Semester ' .$semester . ' Tahun ' . date('Y', strtotime($beladiri->created_at)),
            ];

            return ResponseFormatter::success($nilai_beladiri, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }
    }
}
