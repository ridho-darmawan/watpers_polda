<?php

namespace App\Http\Controllers\api;

use App\Models\Amt;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AmtController extends Controller
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
                'pertanyaan9' => $request->pertanyaan8,
            ];

            $amt = Amt::create($data);

            if($amt){
                return ResponseFormatter::success($amt, 'Successfully.');
            }else{
                return ResponseFormatter::error(null, 'Penyimpanan Gagal', 500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error([], $e->getMessage(),500);
            }
        

    }

    public function penilaianAmt($id_user)
    {
        $amt = Amt::where('id_user',$id_user)->orderBy('id','desc')->first();

        if(!empty($amt)) {

            $total_nilai_amt = DB::table('amt')
                ->select(DB::raw('SUM(CASE WHEN pertanyaan1 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan2 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan3 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan4 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan5 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan6 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan7 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan8 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan9 = "iya" THEN 1 ELSE 0 END) AS jumlah_amt'))
                ->where('id', $amt->id) 
                ->first();

                if($total_nilai_amt->jumlah_amt < 4 ){
                    $tingkat_interpretasi = 'Gangguan Ingatan Berat';
                }elseif ($total_nilai_amt->jumlah_amt < 8 ) {
                   $tingkat_interpretasi = 'Gangguan Ingatan Sedang';
                }else{
                    $tingkat_interpretasi = 'Normal';
                }

            return ResponseFormatter::success($tingkat_interpretasi, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
