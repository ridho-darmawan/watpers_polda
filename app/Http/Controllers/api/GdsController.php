<?php

namespace App\Http\Controllers\api;

use App\Models\Gds;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GdsController extends Controller
{   
  
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'pertanyaan1' => 'required',
                'pertanyaan2' => 'required',
                'pertanyaan3' => 'required',
                'pertanyaan4' => 'required',
                'pertanyaan5' => 'required',
                'pertanyaan6' => 'required',
                'pertanyaan7' => 'required',
                'pertanyaan8' => 'required',
                'pertanyaan9' => 'required',
                'pertanyaan10' => 'required',
                'pertanyaan11' => 'required',
                'pertanyaan12' => 'required',
                'pertanyaan13' => 'required',
                'pertanyaan14' => 'required',
                'pertanyaan15' => 'required',
            ]);
           
            $data = [
                'id_user' => $request->id_user,
                'pertanyaan1' => $request->pertanyaan1,
                'pertanyaan2' => $request->pertanyaan2,
                'pertanyaan3' => $request->pertanyaan3,
                'pertanyaan4' => $request->pertanyaan4,
                'pertanyaan5' => $request->pertanyaan5,
                'pertanyaan6' => $request->pertanyaan6,
                'pertanyaan7' => $request->pertanyaan7,
                'pertanyaan8' => $request->pertanyaan8,
                'pertanyaan9' => $request->pertanyaan9,
                'pertanyaan10' => $request->pertanyaan10,
                'pertanyaan11' => $request->pertanyaan11,
                'pertanyaan12' => $request->pertanyaan12,
                'pertanyaan13' => $request->pertanyaan13,
                'pertanyaan14' => $request->pertanyaan14,
                'pertanyaan15' => $request->pertanyaan15,
            ];

            $gds = Gds::create($data);

            if($gds){
                return ResponseFormatter::success($gds, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error([], $e->getMessage(),500);
            }
        

    }

     public function penilaianGds($id_user)
    {
        $gds = Gds::where('id_user',$id_user)->with('user')->orderBy('id','desc')->first();

        if(!empty($gds)) {

            $total_nilai_gds = DB::table('gds')
                ->select(DB::raw('SUM(CASE WHEN pertanyaan1 = "iya" THEN 0 ELSE 1 END) +
                                SUM(CASE WHEN pertanyaan2 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan3 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan4 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan5 = "iya" THEN 0 ELSE 1 END) +
                                SUM(CASE WHEN pertanyaan6 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan7 = "iya" THEN 0 ELSE 1 END) +
                                SUM(CASE WHEN pertanyaan8 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan9 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan10 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan11 = "iya" THEN 0 ELSE 1 END) +
                                SUM(CASE WHEN pertanyaan12 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan13 = "iya" THEN 0 ELSE 1 END) +
                                SUM(CASE WHEN pertanyaan14 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan15 = "iya" THEN 1 ELSE 0 END) AS total_nilai_gds'))
                ->where('id', $gds->id) 
                ->first();

                if($total_nilai_gds->total_nilai_gds <= 5 ){
                    $tingkat_depresi = 'Normal';
                }elseif ($total_nilai_gds->total_nilai_gds <= 10 ) {
                   $tingkat_depresi = 'Depresi Ringan';
                }else{
                    $tingkat_depresi = 'Depresi Berat';
                }

            return ResponseFormatter::success($tingkat_depresi, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
