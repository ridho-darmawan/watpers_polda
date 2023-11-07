<?php

namespace App\Http\Controllers\api;

use App\Models\Beladiri;
use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class BeladiriController extends Controller
{
    public function index($nrp)
    {
        $beladiri = Beladiri::where('nrp', $nrp)->orderBy('id','desc')->first();

        if($beladiri)
        {
            $nilai_teknik_dasar_beladiri = $beladiri->teknik_dasar1 + $beladiri->teknik_dasar2 + $beladiri->teknik_dasar3 + $beladiri->teknik_dasar4 + $beladiri->teknik_dasar5 + $beladiri->teknik_dasar6;

            $nilai_teknik_beladiri_tanpa_alat = $beladiri->teknik_tanpaalat1 + $beladiri->teknik_tanpaalat2 + $beladiri->teknik_tanpaalat3 + $beladiri->teknik_tanpaalat4 + $beladiri->teknik_tanpaalat5 + $beladiri->teknik_tanpaalat6 + $beladiri->teknik_tanpaalat7  + $beladiri->teknik_tanpaalat8 + $beladiri->teknik_tanpaalat9 + $beladiri->teknik_tanpaalat10;

            $nilai_teknik_beladiri_dengan_alat = $beladiri->teknik_alat1_alat1 + $beladiri->teknik_alat_alat2 + $beladiri->teknik_alat_alat3 + $beladiri->teknik_alat_alat4;
           
            $nilai_beladiri = [
                'teknik_dasar_beladiri' => $nilai_teknik_dasar_beladiri,
                'teknik_beladiri_tanpa_alat' => $nilai_teknik_beladiri_tanpa_alat,
                'teknik_beladiri_dengan_alat' => $nilai_teknik_beladiri_dengan_alat,
                'nilai_beladiri' => $beladiri->jumlah,
                'created_at' => FileHelper::tanggal_indo(date('Y-m-d', strtotime($beladiri->created_at)))
            ];

            return ResponseFormatter::success($nilai_beladiri, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }
    }
}
